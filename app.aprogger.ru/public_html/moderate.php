<!DOCTYPE html>
<html lang="ru">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="description" content="Модерация">
        <meta property="og:title" content="Модерация">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://app.aprogger.ru/moderate-app/access/normalize.css">
        <link rel="stylesheet" href="https://app.aprogger.ru/moderate-app/access/style.css">
        <link rel="stylesheet" href="https://app.aprogger.ru/moderate-app/access/media-v1.css">
        <link rel="shortcut icon" href="https://aprogger.ru/access/img/ico.svg" type="image/x-icon"/>
        <!--<script defer src="https://aprogger.ru/project/moderate/arr-stop.js"> </script>-->
        <script defer src="https://app.aprogger.ru/moderate-app/access/arr-moderate-2.js"> </script>
        <script src="https://aprogger.ru/access/js/console.js" defer></script>
    <title>Форма сбора данных</title>
            <!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
    </head>
    <body class="body">
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
    <div class="container">
     <!-- Yandex.RTB R-A-7761299-1 -->
<div style="width:100%;height:300px;margin-bottom:50px;" id="yandex_rtb_R-A-7761299-1"></div>
<script>
window.yaContextCb.push(()=>{
	Ya.Context.AdvManager.render({
		"blockId": "R-A-7761299-1",
		"renderTo": "yandex_rtb_R-A-7761299-1"
	})
})
</script>
    <section class="form"> 
<div class="container"> 
<div class="flex center column">
<a class="right-section__link" href="mailto:aprogger@mail.ru" target="blank">aprogger@mail.ru</a>
<a class="right-section__link" href="https://app.aprogger.ru/moderate-app/access/send" target="blank">Страница полученных данных на обработку</a>
<a class="right-section__link" href="https://skisibay.ru/moderate/" target="blank">Журнал статуса</a> </div>

        <h1 class="main-header reset-heading center">Форма сбора данных</h1>
        <h2 class="reset-heading center">Версия приложения v2.0 </h2>
        <p>Платформа распознает такие ошибки, как использование заглавных букв в тексте (Caps Lock), опечатки, грамматические ошибки, использование стоп-слов («лотерея», «предлагаем», «ждем», «будем рады», «приглашаем», «цель», «целях», «задача», «мы», «наш»,«наши», «нашему», «наших», «Наша») </p>
        <p>Ошибки такого рода, эта форма создана предотвращать </p>
        <img style="max-width:770px; display:flex; justify-content:center;" src="https://app.aprogger.ru/moderate-app/access/images/yZ1dqG46NHM.jpg" alt="Изображение примера ошибки">
        <p> Рекомендации: В поле описание пишется анонс события, то что получит посетитель или то что узнает на вашем мероприятии. </p>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/spektakli" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для спектаклей </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/vistavki" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для выставки </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/kontserti" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для концертов </h2></a>
        <a class="mb-30" href="https://www.culture.ru/afisha/moskva/pushkinskaya-karta/obuchenie" target="blank"><h2 class="mb-30 center" style="font-size:19px;">Примеры для мастер-классов и лекций </h2></a>
   <div class="flex">  <form class="form__text" method="post" action="https://app.aprogger.ru/moderate-app/access/process.php" onsubmit="return validateForm()" enctype="multipart/form-data">
        <label for="name">Название:</label>
        <input class="form-info" type="text" name="name" placeholder="Концет ‹ У бабушки›" required>
 
        <label for="description">Описание:</label>
        <textarea class="form-message" id="description" name="description" minlength="500"  maxlength="700"  placeholder="Минимальная длина текста 500 символов, максимальная 700" required></textarea>
<p class="descr-reset mb-30"> Рекомендации: В поле описание пишется текст без официального рассказа, напишите что посетитель узнает и получит. </p>
        <label for="price">Стоимость:</label>
        <input class="form-info  input-box" type="text" name="price"  placeholder="Например: 1 билет 350" required>
        <p class="descr-reset mb-30"> Рекомендации: Стоимость билета указывается цифрами 100, 350 или 700</p>
        <label for="date_range">Дата: Укажите один день</label>
        <input  class="form-info input-box" type="date" name="date_range" placeholder="30.09.2024" required>
<p class="descr-reset mb-30"> Рекомендации: В поле дата пишется только одна дата, события более 1 дня не проходят. </p>
          <label for="date_time">Время Например: 16:00 или 16:00 и 17:00</label>
        <input  class="form-info  input-box" type="text" name="date_time" placeholder="16:00" required>
<p class="descr-reset mb-30"> Рекомендации: В поле Время пишется время, в которое должны прийти посетители </p>
        <label for="fullname">ФИО: Кто будет получать перечисление за проведение</label>
        <input class="form-info  input-box" type="text" name="fullname" placeholder="Иванов Иван Иванович" required>
<!-- <div class="file-input"> --><p class="descr-reset mb-30"> Рекомендации: В этом месте надо указать,того ,кто получит денежные средства за проведение.  </p>
        <label class="upload-button" for="image1">Загрузите Афишу Формат- телефона</label>
        <input class="upload" type="file" name="image1" required>
        <p class="descr-reset mb-30"> Рекомендации: Загрузите афишу, для установки в систему билетного оператора.</p>
        <!-- <div class="selected-file"></div> -->
<!-- </div> -->
<!-- <div class="file-input"> -->
        <label class="upload-button" for="image2">Загрузите Карточку мероприятия Формат- планшета</label>
        <input class="upload" type="file" name="image2" required>
        <p class="descr-reset mb-30"> Рекомендации: Загрузите фотографию похожую на ваше мероприятие,чтобы посетитель смог понять что будет происходить. Это обязательная фотография, требуется порталом Культура.рф</p>
        <!-- <div class="selected-file"></div> -->
<!-- </div>  -->
        <input class="btn" type="submit" value="Отправить">
    </form> </div>
    <div class="result-container" id="result-container">
    <div id="popup">
      <span id="closeButton">&times;</span>
      <h2>Возможные ошибки!</h2>
      <p id = "result-text"></p>
      <button class="forceSubmitButton" id="forceSubmitButton">Отправить принудительно(beta)</button>
    </div>
  </div>
   </div> 
    </section>