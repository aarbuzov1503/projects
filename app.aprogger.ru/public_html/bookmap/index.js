// Select the save button
var button = document.querySelector(".save_button");

// Select the input box
var siteName = document.querySelector("[name='site_name']");
var url = document.querySelector("[name='url']");

// Select the <div> with class="bookmarks"
var bookmarksSection = document.querySelector(".bookmarks");

// Hold bookmarks in local storage
if(typeof(localStorage.bookmark) == "undefined"){
localStorage.bookmark = "";
}

// listen for form submit

button.addEventListener("click", function(e){

// Prevent the page from reloading when submitting the form
e.preventDefault();

let patterURL = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi;

let arrayItems, check = false, adr, itemAdr;

// Validation of form and URL

if(siteName.value === ""){
	alert("вы должны ввести название сайта");
} else if(url.value === ""){
	alert("вы должны ввести URL-адрес");
} else if(!patterURL.test(url.value)){
	alert("вы должны ввести действительный URL-адрес");
} else{
	
	arrayItems = localStorage.bookmark.split(";");
	adr = url.value;
	adr = adr.replace(/http:\/\/|https:\/\//i, "");
	arrayItems.length--;
	
	// Check if website is already bookmarked
	for(item of arrayItems){
		itemAdr = item.split(',')[1].replace(/http:\/\/|https:\/\//i,"");
		if(itemAdr == adr){
		check = true;
		}
	}
	
	if(check == true){
		alert("Этот веб-сайт уже добавлен в закладки!");
	}
	else{
	
		// If all checks are correct,add bookmark to local storage
		localStorage.bookmark += `${siteName.value},${url.value};`;
		addBookmark(siteName.value, url.value);
		siteName.value = "";
		url.value = ""; 
	}
}
});


// Function to add the bookmark

function addBookmark(name, url){
let dataLink = url;

// After obtaining a bookmark, we display it in a div and add
// a button to visit the link or to delete it
if(!url.includes("http")){
	url = "//" + url;
}
let item = `<div class="bookmark">
			<span>${name}</span>
			<a class="visit" href="${url}" target="_blank"
				data-link='${dataLink}'>Открыть</a>
			<a onclick="removeBookmark(this)"
				class="delete" href="#">Удалить</a>
			</div>`;
bookmarksSection.innerHTML += item;
}


// function to render the saved bookmarks

(function fetchBoookmark(){
if(typeof(localStorage.bookmark) != "undefined" && localStorage.bookmark !== ""){
	let arrayItems = localStorage.bookmark.split(";");
	arrayItems.length--;
	for(item of arrayItems){
	let itemSpli = item.split(',');
	addBookmark(itemSpli[0], itemSpli[1]);
	}
}
})();


// Function to remove the bookmark

function removeBookmark(thisItem){
let arrayItems = [],
	index,
	item = thisItem.parentNode,
	itemURL = item.querySelector(".visit").dataset.link,
	itemName = item.querySelector("span").innerHTML;
arrayItems = localStorage.bookmark.split(";");

for(i in arrayItems){
	if(arrayItems[i] == `${itemName},${itemURL}`){
	index = i;
	break;
	}
}

//update the localStorage
index = arrayItems.indexOf(`${itemName},${itemURL}`);
arrayItems.splice(index,1);
localStorage.bookmark = arrayItems.join(";");

//update the bookmark Section
bookmarksSection.removeChild(item);
}


//=======================Код меню для мобильного устроиства===================================
let burger = document.querySelector('.burger');
let menu = document.querySelector('.header__nav');
let menuLinks = menu.querySelectorAll('.header__link');


burger.addEventListener('click',
  function () {

    burger.classList.toggle('burger--active');

    menu.classList.toggle('header__nav--active');

    document.body.classList.toggle('stop-scroll');
  })

menuLinks.forEach(function (el) {
  el.addEventListener('click', function () {

    burger.classList.remove('burger--active');
    menu.classList.remove('header__nav--active');
    document.body.classList.remove('stop-scroll');
  })
})
