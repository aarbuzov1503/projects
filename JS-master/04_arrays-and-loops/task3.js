let count = 5;
let orderedArray = [];

for (let i = 1; i <= count; i++) {
  orderedArray.push(i);
}

for (let i = orderedArray.length - 1; i > 0; i--) {
  let randomIndex = Math.floor(Math.random() * (i + 1));
  let temp = orderedArray[i];
  orderedArray[i] = orderedArray[randomIndex];
  orderedArray[randomIndex] = temp;
}

console.log(orderedArray);


let array = orderedArray;
let n = 3;
let index = -1;

for (let i = 0; i < array.length; i++) {
  if (array[i] === n) {
    index = i;
    break;
  }
}

if (index !== -1) {
  console.log("Индекс элемента:", index);
} else {
  console.log("Такой элемент не найден в массиве.");
}
