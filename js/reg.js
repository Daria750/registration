var firstname, lname, login, email, telephone, password, password1,flag;
var password=null;
var password1=null;
document.getElementById("profile").onsubmit=validationForm;
function validationForm(){
	firstname=document.getElementById("firstname").value;
	lname=document.getElementById("lname").value;
    login=document.getElementById("login").value;
    if(document.getElementById("password")){
	password=document.getElementById("password").value;
    password1=document.getElementById("password1").value;
	}    
    email=document.getElementById("email").value;
    telephone=document.getElementById("telephone").value;
	var allData="Ваше имя: "+firstname+"\n"+"Ваше фамилия: "+lname+"\n"+"Ваш логин: "+login+"\n"+"Ваш email: "+email+"\n"+"Ваш телефон: "+telephone;
	var bad="";
	if(firstname.search(/[А-Яа-яA-Za-z]{2,}/)<0) {bad="Имя слишком короткое или содержит недопустимые символы!"+"\n";
	document.getElementById("firstname").style.background="rgba(255,0,0,0.2)";}
	else document.getElementById("firstname").style.background="white";
	if(lname.search(/[А-Яа-яA-Za-z]{2,}/)<0) {bad+="Фамилия слишком короткая или содержит недопустимые символы!"+"\n";
	document.getElementById("lname").style.background="rgba(255,0,0,0.2)";}
	else document.getElementById("lname").style.background="white";
	if(login.search(/[A-Za-z0-9]{3,30}/)<0) {bad+="Логин слишком короткий или содержит недопустимые символы!"+"\n";
	document.getElementById("login").style.background="rgba(255,0,0,0.2)";}
	else document.getElementById("login").style.background="white";
	if(email.search(/(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/)<0) {bad+="Email введен некорректно!"+"\n";
	document.getElementById("email").style.background="rgba(255,0,0,0.2)";}
	else document.getElementById("email").style.background="white";
	if(telephone.search(/\+38-0[0-9]{2}-[0-9]{7}$/)<0) {bad+="Телефон введeн некорректно!"+"\n";
	document.getElementById("telephone").style.background="rgba(255,0,0,0.2)";}
	else document.getElementById("telephone").style.background="white";
	if(password!=null){	
	if(password.search(/[A-Za-z0-9-]{3,8}/)<0) {bad+="Пароль должен быть не меньше 3 и не больше 8 символов!"+"\n";
	flag=false;
	document.getElementById("password").style.background="rgba(255,0,0,0.2)";
	document.getElementById("password1").style.background="rgba(255,0,0,0.2)";}
	else {document.getElementById("password").style.background="white";
	flag=true;}
	if((flag)&&(password!=password1)){bad+="Пароли не совпадают"+"\n";
	document.getElementById("password").style.background="rgba(255,0,0,0.2)";
	document.getElementById("password1").style.background="rgba(255,0,0,0.2)";}
	else if(flag) {document.getElementById("password1").style.background="white";
	}}
	if(bad!=""){
		alert(bad);
		return false;}
	confirm(allData);
	return true;
}