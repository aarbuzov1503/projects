<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="description" content="Генератор QR-кодов">
    <meta property="og:title" content="Генератор QR-кодов">
    <meta property="og:image" content="https://qr.create.alex-verstak.ru/QR.png"/>
     <link rel="shortcut icon" href="logo-w.svg" type="image/x-icon" />
      <link rel="stylesheet" href="https://app.aprogger.ru/qr/normalize.css">
    <link rel="stylesheet" href="https://app.aprogger.ru/qr/style.css">
        <link rel="stylesheet" href="https://app.aprogger.ru/qr/media.css">
    <title>Генератор QR-кодов для вашего сайта</title>
    <script type="text/javascript" src="https://app.aprogger.ru/qr/qrcode.min.js"></script>
    <script defer src="https://app.aprogger.ru/qr/app.js"></script>
            <!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
</head>

<body class="body">
        <section class="section first__section">
        <div class="container">
<h1 class="main-heading reset-heading">QR-генератор</h1>
    <h2 class="heading reset-heading">Генератор QR кодов списком</h2>
    <form action="qr_generator.php" method="post">
      <textarea class="textarea" name="numbers" placeholder="Введите список цифр и нажмите сгенерировать, файлы будут сохранены в формате zip"></textarea>
      <input class="btn" type="submit" value="Сгенерировать">
    </form>
  </div> 
   <!-- Yandex.RTB R-A-7761299-1 -->
<div style="width:100%;height:200px;margin-bottom:50px;" id="yandex_rtb_R-A-7761299-1"></div>
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-7761299-1",
		"renderTo": "yandex_rtb_R-A-7761299-1"
	})
})
</script>
  </section>
    <section class="section second__section">
        <h2 class="second__section-header reset-heading">Генератор QR кодов по отдельным файлам</h2>
        <p class="description descr-reset">Помогите клиентам быстро найти вашу страницу в&nbsp;интернете. Благодаря QR-коду клиентам не&nbsp;придётся вводить вручную ссылку на&nbsp;ваш сайт или любой другой онлайн-ресурс. Достаточно отсканировать QR-код.В&nbsp;поле ниже вставьте адрес вашего сайта и&nbsp;нажмите кнопку
            &laquo;Сгенерировать&raquo;, после чего ниже появится QR-код. Вы&nbsp;можеме скопировать его или сохранить,
            нажав по&nbsp;нему правой кнопкой мыши и&nbsp;выбрав соответствующий пункт меню.</p>
    </section>
    <section class="section__form section">
        <input class="textarea" type="url" name="url" placeholder="https://aprogger.ru/">
        <button class="btn btn-link">Сгенерировать</button>
    </section>
     <!-- Yandex.RTB R-A-7761299-1 -->
<div style="width:100%;height:100px;margin-bottom:50px;" id="yandex_rtb_R-A-7761299-1"></div>
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-7761299-1",
		"renderTo": "yandex_rtb_R-A-7761299-1"
	})
})
</script>
    <section>
        <div class="error-message"></div>
        <hr>
    </section>
    <section class="qrcode-container">
        <div id="qrcode"></div>
    </section>
</body>

</html>