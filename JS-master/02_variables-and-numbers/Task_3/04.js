let n = -3; // задаем минимальное число диапозона
let m = -10; // задаем максимальное число диапозона

let number1 = Math.round(Math.random() * (m - n) + n); // задаем первое число
let number2 = Math.round(Math.random() * (m - n) + n); //задаем второе число

let max = Math.max(number1, number2); //вычисляем максимум
let min = Math.min(number1, number2); // вычисляем минимум

console.log("Минимальное число", min); // выводим максимум
console.log("Максимальное число", max); // выводим минимум

console.log("Числа равны", max === min);
console.log("Первое число больше", max > min);
console.log("Первое число меньше", max < min);
console.log("Первое число не равно", max !== min);
console.log("Первое число больше или равно", max >= min);
