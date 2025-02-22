//=======================Код меню для мобильного устроиства===================================
let burger = document.querySelector('.burger');
let menu = document.querySelector('.nav-wrap');
let menuLinks = menu.querySelectorAll('.header__link');

burger.addEventListener('click',
  function () {

    burger.classList.toggle('burger--active');

    menu.classList.toggle('nav-wrap--active');

    // document.body.classList.toggle('stop-scroll');
  })

menuLinks.forEach(function (el) {
  el.addEventListener('click', function () {

    burger.classList.remove('burger--active');
    menu.classList.remove('nav-wrap--active');
    // document.body.classList.remove('stop-scroll');
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

//=======================Код всплывания формы по кнопке===================================
const button = document.querySelector('.back-btn');
const formContainer = document.querySelector('.form-container');
const popup = document.querySelector('.popup');
const buttonRemove = document.querySelector('closeButton');

button.addEventListener('click', () => {
  formContainer.classList.add('open');
  // document.body.classList.toggle('stop-scroll');
});

//   buttonRemove.addEventListener('click', () => {
//   form.classList.remove('open');
//   popup.classList.add('none');
//   document.body.classList.remove('stop-scroll');
// });


document.getElementById('closeButton').addEventListener('click', function () {
  formContainer.classList.remove('open');
  // document.body.classList.remove('stop-scroll');
});

document.getElementById('form-container').addEventListener('click', function (event) {
  if (event.target == document.getElementById('form-container')) {
    formContainer.classList.remove('open');
    // document.body.classList.remove('stop-scroll');
  }
});
//=======================Код отправки данных из формы с подвала===================================
$(function () {
  $('.footer__send-btn').on('click', function () {
    let data = {
      'name': $('[name="name"]').val(),
      'phone': $('[name="phone"]').val(),
      'email': $('[name="email"]').val(),
      'text': $('[name="text"]').val()
    };
    $.post('api.php', data, function (response) {
      if (response == 1) {
        $('[name="name"]').val('');
        $('[name="phone"]').val('');
        $('[name="email"]').val('');
        $('[name="text"]').val('');
        alert('Ваша заявка принята!\nМы с вами свяжемся');
      } else {
        alert('Что-то пошло не так :(\nПовторите попытку позже\nИли напишите сюда aprogger@mail.ru')
      }
    })
    return false;
  });
});

//=======================Код отправки данных из формы с header===================================
$(function () {
  $('.back-form__send-btn').on('click', function () {
    let data = {
      'header-form__name': $('[name="header-form__name"]').val(),
      'header-form__phone': $('[name="header-form__phone"]').val(),
      'header-form__email': $('[name="header-form__email"]').val()
    };
    $.post('header-api.php', data, function (response) {
      if (response == 1) {
        $('[name="header-form__name"]').val('');
        $('[name="header-form__phone"]').val('');
        $('[name="header-form__email"]').val('');
        alert('Ваша заявка на звонок принята!\nМы с вами свяжемся');
      } else {
        alert('Что-то пошло не так :(\nПовторите попытку позже\nИли напишите сюда aprogger@mail.ru')
      }
    })
    return false;
  });
});