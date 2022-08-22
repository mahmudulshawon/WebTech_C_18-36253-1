function validation(val){
	var name = val.name.value;
	
	
	var userName = val.userName.value;
    var email = val.email.value;
	var password = val.password.value;
	
	var flag = true;
	if(name==="")
	{
	   document.getElementById('nameError').innerHTML="Field can't be empty";
		flag = false;
	}
	
	
	
	if(userName==="")
	{
		document.getElementById('userNameError').innerHTML="field can't be empty";
		flag = false;
	}
	if(email==="")
	{
		document.getElementById('emailError').innerHTML="field can't be empty";
		flag = false;
	}
	if(password==="")
	{
		document.getElementById('passwordError').innerHTML="field can't be empty";
		flag = false;
	}

	return flag;
}

function ajax(pform) {
	// body...
	var isValid=validation(pform);
	if(isValid){
		var fd = new FormData();
		fd.append("name",pform.name.value);
		
		
		fd.append("userName",pform.userName.value);
		fd.append("email",pform.email.value);
		fd.append("password",pform.password.value);
		
		var xhttp = new XMLHttpRequest();
		xhttp.onload = function(){
			if (this.status===200) {
				  document.getElementById("msg").innerHTML = this.responseText;
			}
		}
		xhttp.open("POST","../controller/registrationAction.php");
		
		xhttp.send(fd);
	}
	
}