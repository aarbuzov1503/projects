document.getElementById('forceSubmitButton').addEventListener('click', function() {
  document.getElementById('result-container').style.display = 'none';
  document.getElementById('popupContainer').style.display = 'none';
  submitForm();
});


function submitForm() {
    // Ваш код для обработки и отправки формы без проверки
    var xhr = new XMLHttpRequest();
  xhr.open("POST", "https://aprogger.ru/project/moderate/process.php", true);

  // Установка заголовка Content-Type для отправки данных формы
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // Обработчик события, который будет вызван при успешном выполнении запроса
  xhr.onload = function() {
    if (xhr.status === 200) {
      // Здесь можно добавить код для обработки успешного ответа от сервера
      var message200 = "Данные отправлены успешно, без проверки текста ";
    alert(message200);
    // console.log(message200);
    console.log("Запрос успешно выполнен");
    }
    else {
      // Здесь можно добавить код для обработки ошибки при выполнении запроса
       var message400 = "Ошибка! Отправка не удалась ";
       console.log("Произошла ошибка при выполнении запроса");
    alert(message400);
    // console.log(message400);
    }
  };

  // Получение данных из формы
  var formData = new FormData(document.querySelector("form"));

  // Отправка данных на сервер
  xhr.send(formData);
}






function validateForm() {
  var description = document.getElementById("description").value;

  var stop = [
    "лотерея", 
    "предлагаем", 
    "ждем", 
    "будем рады", 
    "приглашаем", 
    "цель", 
    "задача", 
    "мы", 
    "наш" , 
    "целях", 
    "наши", 
    "нашему", 
    "наших", 
    "наша",
    "Лотерея", 
    "Предлагаем", 
    "Ждем", 
    "Будем рады", 
    "Приглашаем", 
    "Цель", 
    "Задача", 
    "Мы", 
    "Наш" , 
    "Целях", 
    "Наши", 
    "Нашему", 
    "Наших", 
    "Наша"
  ];

  var foundWords = [];

  function checkWord(word) {
    if (description.indexOf(word) !== -1) {
      foundWords.push(word);
    }
  }

  stop.forEach(function(word) {
    checkWord(word);
  });

  if (foundWords.length > 0) {
    var message = "Измените описание! Обнаружено использование стоп-слов: ";
    foundWords.forEach(function(word) {
      message += "<span>" + word + "</span>, ";
    });
    message = message.slice(0, -2);
    var resultContainer = document.getElementById("result-container");
    var resultText = document.getElementById("result-text");
    resultText.innerHTML = message;
    resultContainer.style.display = "block";
    return false;
  }
  return true;
}

// document.getElementById('openButton').addEventListener('click', function() {
//   document.getElementById('popupContainer').style.display = 'block';
// });

document.getElementById('closeButton').addEventListener('click', function() {
  document.getElementById('result-container').style.display = 'none';
  //document.getElementById('popupContainer').style.display = 'none';
});

document.getElementById('result-container').addEventListener('click', function(event) {
  if (event.target == document.getElementById('result-container')) {
    document.getElementById('result-container').style.display = 'none';
  }
});