$(document).ready(function(){
var firstname=$("#pfirstname").text();
var lname=$("#plname").text();
var login=$("#plogin").text();
var email=$("#pemail").text();
var telephone=$("#ptelephone").text();
var password=555;
//var password=<?=$result['password']?>;
$("#firstname").attr('value',firstname);
$("#lname").attr('value',lname);
$("#login").attr('value',login);
$("#telephone").attr('value',telephone);
$("#email").attr('value',email);
$("#password").attr('value',password);
$("#change").click(function() {
//Ўирина и высота всего документа
var HeightDocument = $(document).height();
var WidthDocument = $(document).width();
//Ўирина и высота окна браузера
var HeightScreen = $(window).height();

//ѕлавное анимационное наложение на страницу серого фона
$(".modal_bg").css({"width":WidthDocument,"height":HeightDocument});
$(".modal_bg").fadeIn(1000);
$(".modal_bg").fadeTo("slow",0.8);

//–асположение модального окна с содержимым по высоте учитыва€ скроллинг документа
var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".modal_window").height()/2;
$(".modal_window").css({"top":Top_modal_window+"px","display":"block"});

//«апрет на сколлинг страницы
$("body").css({"overflow":"hidden"});
return false;
});

//ѕри клике на кнопке "Close Window", модальное окно и фон скрываютс€
	$(".modal_window button").click(function () {
$(".modal_bg, .modal_window").hide();
$("body").css({"overflow":"auto"});
})
;

//ѕри клике вне области модального окна, фон и модальное окно скрываютс€
$(".modal_bg").click(function () {
$(".modal_bg, .modal_window").hide();
$("body").css({"overflow":"auto"});
});
//var name1=$("#firstname").attr("value");
$("#sendData").click(function(){
	if(validationForm()==true){
	$.ajax({url:"ajax.php",
	 type:"POST", //“ип запроса
    dataType: 'json', //“ип данных
    data: $("#form_id").serialize(),
	success:function(str){
		$("#greet").text(str['firstname']);
		$("#pfirstname").text(str['firstname']);
		$("#plname").text(str['lname']);
		$("#plogin").text(str['login']);
		$("#pemail").text(str['email']);
		$("#ptelephone").text(str['telephone']);
		}
		
	});
}});
});