<?
// Подключение к базе данных MySQL
$servername = "localhost";
$dbuser = "cl92747_aprogger";
$dbpass = "Aprogger@cl92747";
$dbname = "cl92747_aprogger";

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM moderate ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
    	  <link rel="shortcut icon" href="https://aprogger.ru/access/img/ico.svg" type="image/x-icon"/>
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
            
            .container {
            	max-width: 1360px;
            	padding: 0 50px;
            	margin: 0 auto;
            }
        </style>
        <script src="https://aprogger.ru/access/js/console.js" defer></script>
    </head>
    <body>
    	  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(96698197, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/96698197" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
       <section class="section-form-1">
       <div class="container">
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
        	<th>Афиша</th>
            <th>Фотография</th>
            <th>Дата поступления</th>
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
                    echo '<td> https://app.aprogger.ru/moderate-app/access/' . $row['image1'] . ' </td>';
                    echo '<td> https://app.aprogger.ru/moderate-app/access/' . $row['image2'] . ' </td>';
                    echo '<td> ' . $row['datetime'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
       	
       </div>
        </section>
    </body>
</html>