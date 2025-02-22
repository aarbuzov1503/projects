let array = [2, 5, 1, 3, 4];
let sortedArray = arrSort(array);

function arrSort(arr) {
  // let len = arr.length;

  for (let i = 0; i < arr.length - 1; i++) {
    for (let j = 0; j < arr.length - 1 - i; j++) {
      if (arr[j] > arr[j + 1]) {
        let temp = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = temp;
      }
    }
  }

  return arr;
}


console.log(sortedArray);

