function validateForm(){
	var uname = document.getElementById('username');
	var email = document.getElementById('email');
	var pword = document.getElementById('password');
	var pconf = document.getElementById('pwconfirm');


	if (uname.value == '' || uname.value == null){
		alert("You can't leave the Username field blank!");
		uname.focus();
		return false;
	}
	if(email.value == '' || email.value == null){
		alert("You can't leave the Email field blank!");
		email.focus();
		return false;
	}


	if(pword.value == '' || pword.value == null){
		alert("You can't leave the Password field blank!");
		pword.focus();
		return false;
	}
	if(pconf.value == '' || pconf.value == null){
		alert("You can't leave the Confirm Password field blank!");
		pconf.focus();
		return false;
	}

	if(pword.value != pconf.value){
		alert("Passwords don't match!");
		pword.focus();
		return false;
	}	
	
	if (uname.value.length < 6) {
		alert("Username must be at least 6 characters long");
		document.getElementById('uname').focus();
		return false;
	}

	 if(email.value.indexOf('@')<0){
		alert('Not a Valid Email Address');
		document.getElementById('email').focus();
		return false;
	} else if(email.value.indexOf('@') != email.value.lastIndexOf('@')){
		alert('Not a Valid Email Address');
		document.getElementById('email').focus();
		return false;
	} else if(email.value.indexOf('.')<0){
		alert('Not a Valid Email Address');
		document.getElementById('email').focus();
		return false;
	} else if(email.value.lastIndexOf('.')<email.value.indexOf('@')){
		alert('Not a Valid Email Address');
		document.getElementById('email').focus();
		return false;
	}

	 if (pword.value.length < 8) {
		alert("Password must be at least 8 characters long");
		document.getElementById('password').focus();
		return false;
	}

	if (!(/[A-Z]/.test(pword.value))) {
		alert("Password Must Have At Least 1 Upper Case Letter!");
		document.getElementById('password').focus();
		return false;	
	}

    if (!(/[0-9]/.test(pword.value))) {
		alert("Password Must Have At Least 1 Number!");
		document.getElementById('password').focus();
		return false;	
	}
}

 function verifyApproval(i){
	if(i == 1)
		return confirm('You selected to APPROVE the selected user. Proceed?');
	else
		return confirm('You selected to DISAPPROVE the selected user. Proceed?');
 }
 function isNotEmpty(s){
	var input = document.getElementById(s);
	if(input.value == '' || input.value == null){
		alert("This field cannot be empty!");
		input.focus();
		return false;
	}
 }
 function matches(s1,s2){
	var i = document.getElementById(s1);
	var j = document.getElementById(s2);
	if(i.value == '' || j.value =='' || i.value == null || j.value ==null){
		alert("The fields cannot be empty.");
		j.focus();
		return false;
	}
	else if(i.value != j.value){
		alert("The passwords do not match");
		j.focus();
		return false;
	}
	else if (!(/[A-Z]/.test(i.value))) {
		alert("Password Must Have At Least 1 Upper Case Letter!");
		document.getElementById('p1').focus();
		return false;	
	}

	else if (!(/[0-9]/.test(i.value))) {
		alert("Password Must Have At Least 1 Number!");
		document.getElementById('p1').focus();
		return false;	
	}
	else if(i.value.length < 6){
		alert("Password cannot be less than 6 characters.");
		i.focus();
		return false;
	}
 }
 
 