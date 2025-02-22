function createStudentCard(name, age) {
  let card = document.createElement('div');
  card.classList.add('student-card');

  let heading = document.createElement('h2');
  heading.textContent = name;

  let span = document.createElement('span');
  span.textContent = 'Возраст: ' + age + ' лет';

  card.appendChild(heading);
  card.appendChild(span);

  document.body.appendChild(card);
}

createStudentCard('Игорь', 17);

