let yearOfBirth = 1998;
let age = getAge(yearOfBirth);

function getAge(yearOfBirth) {
  let currentYear = new Date().getFullYear(); // Получаем текущий год
  let age = currentYear - yearOfBirth; // Вычисляем возраст
  console.log(currentYear);

  return age; // Возвращаем результат
}


console.log(age);

