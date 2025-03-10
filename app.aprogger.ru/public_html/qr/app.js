document.addEventListener('DOMContentLoaded', function () {
    let url = document.querySelector('[name="url"]');
    let qrcodeContainer = document.getElementById("qrcode");
    let errorMessage = document.querySelector('.error-message');

    var qrcode = new QRCode(qrcodeContainer, {
        width: 512,
        height: 512
    });

    let showErrorMessage = function (message) {
        errorMessage.innerHTML = message;
        errorMessage.classList.add('error-message-active');
        qrcodeContainer.querySelector('img').style.display = 'none';
        qrcodeContainer.querySelector('img').src = '';
        let canvas = qrcodeContainer.querySelector('canvas');
        canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
        canvas.style.display = 'block';
        url.focus();
    };

    let hideErrorMessage = function () {
        errorMessage.classList.remove('error-message-active');
        errorMessage.innerHTML = '';
    };

    let makeCode = function () {

        if (url.value == '') {
            showErrorMessage('Введите адрес ресурса, который хотите закодировать');
            return;
        }

        if (!url.value.match(/^[a-z]+:\/\//)) {
            showErrorMessage('Адрес должен начинаться с протокола,\nнапример, http:// или https://');
            return;
        }

        qrcode.makeCode(url.value);
    }

    url.addEventListener('keypress', function () {
        hideErrorMessage();
    });

    url.addEventListener('paste', function () {
        hideErrorMessage();
    });

    document.querySelector('.btn-link').addEventListener('click', function () {
        makeCode();
    });
});


//=======================Код меню для мобильного устроиства===================================
let burger = document.querySelector('.burger');
let menu = document.querySelector('.header__nav');
let menuLinks = menu.querySelectorAll('.header__link');


burger.addEventListener('click',
  function () {

    burger.classList.toggle('burger--active');

    menu.classList.toggle('header__nav--active');

    document.body.classList.toggle('stop-scroll');
  })

menuLinks.forEach(function (el) {
  el.addEventListener('click', function () {

    burger.classList.remove('burger--active');
    menu.classList.remove('header__nav--active');
    document.body.classList.remove('stop-scroll');
  })
})


//=======================Уведомление о сборе данных на сайте===================================

function checkCookies(){
  let cookieDate = localStorage.getItem('cookieDate');
  let cookieNotification = document.getElementById('cookie_notification');
  let cookieBtn = cookieNotification.querySelector('.cookie_accept');

  // Если записи про кукисы нет или она просрочена на 1 день, то показываем информацию про кукисы
  if( !cookieDate || (+cookieDate + 86400000) < Date.now() ){
      cookieNotification.classList.add('show');
  }

  // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
  cookieBtn.addEventListener('click', function(){
      localStorage.setItem( 'cookieDate', Date.now() );
      cookieNotification.classList.remove('show');
  })
}
checkCookies();
