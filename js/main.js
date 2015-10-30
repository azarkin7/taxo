$(document).ready(function(){
//Клик расчитать стоимость такси Начало
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
//Клик расчитать стоимость такси Конец
$(".btnregist").click(function(){
  var surname=$('#inputsurname').val();
  var name=$('#inputname').val();
  var tel=$('#inputmobile').val();
  var flag1,flag2,flag3=false;
  if(surname=="undefined" || surname==""){
    $(".err1").html("Это поле обязательно");
  }else{
      $(".err1").html("");
      flag1=true;
  }
  if(name=="undefined" || name==""){
    $(".err2").html("Это поле обязательно");
  }else{
    $(".err2").html("");
    flag2=true;
  }
  if(tel=="undefined" || tel==""){
    $(".err3").html("Это поле обязательно");
  }else{
    $(".err3").html("");
    flag3=true;
  }
  if(flag1==true && flag2==true && flag3==true){
    $.ajax({
      type:"POST",
      url:"ajax/reg.php",
      data: "surname="+surname+"&name="+name+"&tel="+tel+"",
      success: function(msg){
        console.log(msg);
      }
    });
  }
});
});
