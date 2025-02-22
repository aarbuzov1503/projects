let n = 0;
let m = 100;
let count = 100;

let array = [];

for (let i = 0; i < count; i++) {
  let randomNumber = Math.floor(Math.random() * (m - n + 1)) + n;
  array.push(randomNumber);
}

console.log(array);
