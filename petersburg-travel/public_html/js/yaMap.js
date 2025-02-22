
ymaps.ready(init);
var myMap;

function init() {

    myMap = new ymaps.Map("map", {
        center: [59.94773641073859, 30.323207052001923], // Координаты центра карты[59.94773641073859,30.323207052001923]
        zoom: 13 // Маштаб карты
    });

    // myMap.controls.add(new ymaps.control.ZoomControl());


    myPlacemark = new ymaps.Placemark([59.94773641073859, 30.323207052001923], { // Координаты метки объекта
        balloonContent: "<div class='ya_map'>Заезжайте в гости!</div>" // Подсказка метки
    }, {
        iconLayout: "default#image",
        iconImageHref: "img/Метка.png", // Ссылка на изображение 
        iconImageSize: [20.26, 56], // Размер изображения 
        iconImageOffset: [-3, -42] // Положение изображения 
    });

    myMap.geoObjects.add(myPlacemark);
    //  myPlacemark.balloon.open();
    // Удаление набора кнопок
    myMap.controls.remove("mapTools")
        .remove("typeSelector")
        .remove("trafficControl")
        .remove("searchControl")
        .remove("routeEditor")
        .remove("miniMap")
        .remove("zoomControl")
        .remove("rulerControl")
        .remove("routePanelControl")
        .remove("routeButtonControl")
        .remove("scaleLine")
        .remove("smallZoomControl")
        .remove("routeEditor")
        .remove("geolocationControl")
        .remove("fullscreenControl");
};