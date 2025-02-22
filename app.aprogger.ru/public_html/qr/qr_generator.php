<?php
  require_once 'phpqrcode/qrlib.php'; // Подключаем библиотеку QR кодов

  $numbers = $_POST['numbers']; // Получаем список цифр из формы
  $numbers_array = explode("\n", $numbers); // Разделяем список на отдельные цифры

  if (!empty($numbers_array)) {
    $output_dir = 'qr_codes/'; // Директория, в которую будут сохраняться QR коды
    if (!is_dir($output_dir)) { // Создаем директорию, если она не существует
      mkdir($output_dir);
    }
  
    foreach ($numbers_array as $number) {
      $number = trim($number); // Удаляем лишние пробелы
      if (!empty($number)) {
        $output_file = $output_dir . $number . '.png'; // Имя файла для QR кода
        
        // Генерируем QR код
        QRcode::png($number, $output_file, 'L', 10, 2);
      }
    }
  }

  // Архивируем QR коды и предоставляем ссылку для скачивания
  $zip = new ZipArchive();
  $zip_filename = 'qr_codes.zip'; // Имя архива
  if ($zip->open($zip_filename, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $files = scandir($output_dir);
    foreach ($files as $file) {
      if ($file != '.' && $file != '..') {
        $zip->addFile($output_dir . $file, $file);
      }
    }
    $zip->close();

    // Удаляем созданные QR коды, чтобы не засорять сервер
    foreach ($files as $file) {
      if ($file != '.' && $file != '..') {
        unlink($output_dir . $file);
      }
    }

    // Предоставляем ссылку для скачивания архива
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zip_filename . '"');
    header('Content-Length: ' . filesize($zip_filename));
    readfile($zip_filename);

    // Удаляем архив после скачивания
    unlink($zip_filename);
  }
?>
