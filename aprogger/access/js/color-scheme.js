window.addEventListener("DOMContentLoaded", function() {
    // Получаем ссылки на элементы
    var darkThemeButton = document.getElementById("darkThemeButton");
    var lightThemeButton = document.getElementById("lightThemeButton");
    var body = document.body;
    var nav = document.nav;

    // Функция для установки темы
    function setTheme(theme) {
        body.classList = "";
        body.classList.add(theme);
        nav.classList = "";
        nav.classList.add(theme);
        localStorage.setItem("theme", theme);
    }

    // Слушатель события нажатия кнопки "Тёмная"
    darkThemeButton.addEventListener("click", function() {
        setTheme("dark");
    });

    // Слушатель события нажатия кнопки "Светлая"
    lightThemeButton.addEventListener("click", function() {
        setTheme("light");
    });

    // Установка последнего выбранного темы из памяти браузера
    var savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        setTheme(savedTheme);
    }
});
