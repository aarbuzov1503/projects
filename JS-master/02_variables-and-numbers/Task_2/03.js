let a = 13.890123;
let b = 2.891564;
let n = 3;

// вывод целой части
let aFloor = Math.floor(a);
let bFloor = Math.floor(b);

//вывод дробной части
let aFract = (a % 1);
let bFract = (b % 1);

let aNormalized = Math.trunc(
  aFract * Math.pow(10, n));
let bNormalized = Math.trunc(
  bFract * Math.pow(10, n));

console.log("Исходные числа равны", a, b, a === b);
console.log('Целая часть a: ', aFloor);
console.log('Целая часть b: ', bFloor);
console.log("Нормализованное число a",aNormalized);
console.log("Нормализованное число b", bNormalized);
console.log("Числа равны", aNormalized, bNormalized, aNormalized === bNormalized);
console.log("Первое число больше", aNormalized, bNormalized, aNormalized > bNormalized);
console.log("Первое число меньше", aNormalized, bNormalized, aNormalized < bNormalized);
console.log("Первое число не равно", aNormalized, bNormalized, aNormalized !== bNormalized);
console.log("Первое число больше или равно", aNormalized, bNormalized, aNormalized >= bNormalized);
