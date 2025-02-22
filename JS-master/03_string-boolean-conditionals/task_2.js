let userName = "маРиЯ";
let userSurname = "Иванов";

let formattedUserName = userName[0].toUpperCase() + userName.slice(1).toLowerCase();
let formattedUserSurname = userSurname[0].toUpperCase() + userSurname.slice(1).toLowerCase();

console.log(formattedUserName);
console.log(formattedUserSurname);

console.log(userName === formattedUserName ? "Имя осталось без изменений" : "Имя было преобразовано");
console.log(userSurname === formattedUserSurname ? "Фамилия осталась без изменений" : "Фамилия была преобразована");
