document.getElementById('showButton').addEventListener('click', function() {
  createStudentsList(allStudents);
});

let allStudents = [
  {name: 'Валя', age: 11},
  {name: 'Таня', age: 24},
  {name: 'Рома', age: 21},
  {name: 'Надя', age: 34},
  {name: 'Антон', age: 7}
];

function createStudentsList(listArr) {
  let ul = document.createElement('ul');

  for (let i = 0; i < listArr.length; i++) {
    let student = listArr[i];

    let li = document.createElement('li');

    let heading = document.createElement('h2');
    heading.textContent = student.name;

    let span = document.createElement('span');
    span.textContent = 'Возраст: ' + student.age + ' лет';

    li.appendChild(heading);
    li.appendChild(span);

    ul.appendChild(li);
  }

  document.body.appendChild(ul);
}

