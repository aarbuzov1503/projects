let whiteList = ['my-email@gmail.ru', 'jsfunc@mail.ru', 'annavkmail@vk.ru', 'fullname@skill.ru', 'goodday@day.ru'];
let blackList = ['jsfunc@mail.ru', 'goodday@day.ru'];

let result = filter(whiteList, blackList);


function filter(whiteList, blackList) {
  let filteredList = whiteList.filter(function(email) {
    return !blackList.includes(email); // Фильтруем адреса, отсутствующие в черном списке
  });

  return filteredList;
}


console.log(result);

