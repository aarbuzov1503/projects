<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "cl92747_aprogger";
$password = "Aprogger@cl92747";
$dbname = "cl92747_aprogger";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$dateRange = $_POST["date_range"];
$dateTime = $_POST["date_time"];
$fullname = $_POST["fullname"];

// Проверка наличия загруженных файлов
if(isset($_FILES['image1']) && $_FILES['image1']['error'] === UPLOAD_ERR_OK) {
    $image1Name = $_FILES['image1']['name'];
    $image1TmpName = $_FILES['image1']['tmp_name'];
    $image1Path = "images/" . $image1Name;
    move_uploaded_file($image1TmpName, $image1Path);
} else {
    $image1Path = ""; // пустая строка, если изображение не было загружено
}

if(isset($_FILES['image2']) && $_FILES['image2']['error'] === UPLOAD_ERR_OK) {
    $image2Name = $_FILES['image2']['name'];
    $image2TmpName = $_FILES['image2']['tmp_name'];
    $image2Path = "images/" . $image2Name;
    move_uploaded_file($image2TmpName, $image2Path);
} else {
    $image2Path = ""; // пустая строка, если изображение не было загружено
}

// Вставка данных в таблицу базы данных
$sql = "INSERT INTO moderate (name, description, price, date_range, date_time, fullname, image1, image2)
        VALUES ('$name', '$description', '$price', '$dateRange', '$dateTime', '$fullname', '$image1Path', '$image2Path')";

if ($conn->query($sql) === TRUE) {
    echo "Форма успешно доставлена, эту вкладку можно закрыть";

      ?>    
        
        <?php
    $timer = 5; // начальное значение таймера
?>

<p style="font-size:32px;">Форма успешно доставлена. Через <span id="timer"><?php echo $timer; ?></span> секунд будет произведено перенаправление на страницу статуса</p>

<script>
  var timer = <?php echo $timer; ?>;
  var timerElement = document.getElementById('timer'); // элемент, содержащий значение таймера

  function countdown() {
    timer--;

    // обновляем значение таймера на странице
    timerElement.textContent = timer;

    if (timer <= 0) {
      window.location = 'https://app.aprogger.ru/moderate-app/access/send.php'; // перенаправляем на страницу регистрации пользователей
    } else {
      setTimeout(countdown, 1000); // обновляем таймер каждую секунду
    }
  }

  // запускаем таймер при загрузке страницы
  setTimeout(countdown, 1000);
</script>

<?php
    
} else {
    echo "Ошибка при добавлении данных сообщите администратору:aprogger@mail.ru " . $conn->error;
}

$conn->close();
?>