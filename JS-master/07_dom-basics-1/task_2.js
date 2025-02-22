let studentObj = {
  name: 'Игорь',
  age: 17
};

function createStudentCard(student) {
  let card = document.createElement('div');
  card.classList.add('student-card');

  let heading = document.createElement('h2');
  heading.textContent = student.name;

  let span = document.createElement('span');
  span.textContent = 'Возраст: ' + student.age + ' лет';

  card.appendChild(heading);
  card.appendChild(span);

  document.body.appendChild(card);
}

createStudentCard(studentObj);
