<?
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "cl92747_text";
$password = "cl92747_text_pass";
$dbname = "cl92747_text";

    $dbname = 'cl92747_text';
    $dbuser = 'cl92747_text';
    $dbpass = 'cl92747_text_pass';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM your_table_name ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
    	  <link rel="shortcut icon" href="https://alex-verstak.ru/img/ico.svg" type="image/x-icon"/>
        <title>Список сервера</title>
        <style>
            table {
                border: 1px solid darkgray;
                border-collapse: collapse;
            }

            th {
                background-color: lightblue;
            }

            th, td {
                border: 1px solid darkgray;
                padding: 5px;
            }
            
            .section-form-1 {
            	margin-bottom: 100px;
            }
        </style>
        <script src="https://alex-verstak.ru/js/console.js" defer></script>
    </head>
    <body>
       <section class="section-form-1">
       <h2>Таблица мероприятий ПК</h2>
       <h3>поступят в обработку в течении 5 дней с момента регистрации</h3>
        <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Стоимость билета</th>
            <th>Диапазон дат</th>
            <th>Время</th>
            <th>ФИО</th>
            <th>Изображение 1</th>
            <th>Изображение 2</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['description'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['date_range'] . '</td>';
                    echo '<td>' . $row['date_time'] . '</td>';
                    echo '<td>' . $row['fullname'] . '</td>';
                    echo '<td> https://aprogger.ru/project/app/moderate-app/access/' . $row['image1'] . ' </td>';
                    echo '<td> https://aprogger.ru/project/app/moderate-app/access/' . $row['image2'] . ' </td>';
                    echo '</tr>';
                }
            ?>
        </table>
        </section>
    </body>
</html>