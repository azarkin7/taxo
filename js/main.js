$(document).ready(function(){
  $(".priceorder").click(function(){
    var adrfrom=$(".from").val();
    var adrto=$(".to").val();
    ymaps.ready(init);
      var myMap;

      function init(){
          myMap = new ymaps.Map("map", {
              center: [49.99207514787971,36.27990449999995],
              zoom: 10
          });
          ymaps.route(["Харьков, "+ adrfrom, "Харьков, "+adrto]).then(
              function (route) {
                  myMap.geoObjects.add(route);
              },
              function (error) {
                  alert('Возникла ошибка: ' + error.message);
              }
          );
      }
  });
});
