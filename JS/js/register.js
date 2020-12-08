function getElement(id){
	return document.getElementById(id);
}
function validate(){
	refresh();
	var hasErr=false;
	var e_name = getElement("name");
	var e_email = getElement("email");
	var e_username = getElement("username");
	var err_name = getElement("err_name");
	var err_email = getElement("err_email");
	var err_username = getElement("err_username");
	
	if(e_name.value == ""){
		hasErr= true;
		err_name.innerHTML = "Username Required";
		e_name.focus();
		return !hasErr;
	}
	if(e_email.value == ""){
		hasErr= true;
		err_email.innerHTML = "Email Required";
		e_email.focus();
		return !hasErr;
	}
	if(e_username.value == ""){
		hasErr= true;
		err_username.innerHTML = "Username Required";
		e_username.focus();
		return !hasErr;
	}
	return !hasErr;

}
function refresh(){
	var err_name = getElement("err_name");
	var err_email = getElement("err_email");
	var err_username = getElement("err_username");
	
	err_name.innerHTML = "";
	err_email.innerHTML = "";
	err_username.innerHTML = "";
	
}