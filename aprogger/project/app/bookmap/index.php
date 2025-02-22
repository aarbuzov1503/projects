<!DOCTYPE html>
<html lang="ru">
<head>
	  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta name="description" content="Сервис закладок">
        <meta property="og:title" content="Сервис закладок">
        <link rel="stylesheet" href="normalize.css">
	    <link rel="stylesheet" type="text/css" href="style.css"> 
		<link rel="stylesheet" href="media-2.css"> 
		<link rel="shortcut icon" href="https://alex-verstak.ru/img/logo-w.svg" type="image/x-icon" />
	<title>Онлайн закладки</title>
</head>
<body>
<!-- Yandex.Metrika counter -->
                            <script type="text/javascript" >
                               (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                               m[i].l=1*new Date();
                               for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
                               k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                               (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
                            
                               ym(96505463, "init", {
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true
                               });
                            </script>
                            <noscript><div><img src="https://mc.yandex.ru/watch/96505463" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                            <!-- /Yandex.Metrika counter -->
    <header class="header">
            <div class="container-header--2 container-header">
                <button type="submit" class="burger" aria-label="Открыть меню">
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                    <span class="burger__line" aria-hidden="true"></span>
                </button>
                <div class="header__logo-wrap">
                    <div class="header__logo">
                        <a href="https://alex-verstak.ru/"> 
                            <img class="header__img header__logo" src="https://alex-verstak.ru/img/logo-w.svg" alt="Логотип"></a>
                    </div>
                </div>
                <div class="desktop-menu-nav">
                    <nav class="header__nav nav">
                        <ul class="header__list list-reset">
                            <li class="header__item"> 
                                <a class="header__link" href="https://alex-verstak.ru">Главный сайт</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="https://t.me/a_arbuzov1503">Телеграмм</a></li>
                            <li class="header__item"> 
                                <a class="header__link" href="mailto:alexandr.arbuzov1503@mail.ru">Почта</a></li>
                               <li class="header__item"> 
                                <a class="header__link" href="https://go.2038.pro/bef771b99a05d191?m=32">Скидка 55% Скилбокс</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>


<h1>Онлайн закладки</h1>

<div class="container">
	<!-- form to enter details of site -->
	<form class="form" action="#">
	<div class="input-field">
		<label for="site_name">Название сайта</label>
		<input name="site_name" type="text"
			placeholder="Название сайта">
	</div>

	<div class="input-field">
		<label for="url">URL (Адрес сайта)</label>
		<input name="url" type="text"
			placeholder="https://alex-verstak.ru">
	</div>
		
	<button class="save_button">Сохранить</button>
	</form>

	<!-- section where bookmarks will be displayed -->
	<h2>Сохранённые закладки</h2>
	
	<div class="bookmarks"></div>
</div>

<!-- link the JavaScript file here -->
<script src="index.js"></script>
</body>
</html>
