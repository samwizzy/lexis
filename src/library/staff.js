"use strict"


class Staff {
	constructor(){
		this.email = 'samwize.inc@gmail.com';
		this.password = 'pwd-secret';
	}

	static yield(){
		console.log(this === "window");
		console.log(this);
	}

	static register(){
		console.log('processing..');
		document.getElementById('progress').style.display = 'block';
		if (window.XMLHttpRequest) {
			var XHR = new XMLHttpRequest();
		}
		else {
			var XHR = new ActiveXObject("Microsoft.XMLHTTP");
		}

		var urlEncodedDataPairs = [];
		var urlEncodedData;
		var name;
		var gender;

		if(document.getElementById('male').checked){
			gender = document.getElementById('male').value;
		}else if(document.getElementById('female').checked){
			gender = document.getElementById('female').value;
		}

		var data = {
			firstname: document.getElementById('firstname').value,
			email: document.getElementById('email').value,
			password: document.getElementById('password').value,
			pin: document.getElementById('pin').value,
			gender: gender,
			role: document.getElementById('role').value
		}
		
		console.log(data);


		for(name in data) {
			urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
		}
		urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

		XHR.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('progress').style.display = 'none';
				document.getElementById('log').classList.remove('hide');
				document.getElementById("log").getElementsByTagName('p')[0].innerHTML = '<i class="material-icons">check</i>'+this.responseText;
				console.log(this.responseText);
			}
		};
		XHR.addEventListener('error', function(event) {
			alert('Oops! Something went wrong.');
		});
		XHR.open('POST', 'http://localhost/lexuspos/src/php/register.php');
		XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		XHR.send(urlEncodedData);
	}

	static login(){
		console.log('processing..');
		document.getElementById('progress').style.display = 'block';
		if (window.XMLHttpRequest) {
			var XHR = new XMLHttpRequest();
		}
		else {
			var XHR = new ActiveXObject("Microsoft.XMLHTTP");
		}

		var urlEncodedDataPairs = [];
		var urlEncodedData;
		var name;
		var data = {
			email: document.getElementById('email').value,
			password: document.getElementById('password').value
		}

		for(name in data) {
			urlEncodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
		}
		urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

		XHR.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var log = JSON.parse(this.responseText); 
				document.getElementById('progress').style.display = 'none';
				document.getElementById('log').classList.remove('hide');
				document.getElementById("log").getElementsByTagName('p')[0].innerHTML = '<i class="material-icons">check</i>'+log.msg;
				console.log(log.msg);
				if(log.status === true){ window.location = "http://localhost/lexuspos/dashboard"; }
			}
		};
		XHR.addEventListener('error', function(event) {
			alert('Oops! Something went wrong.');
		});
		XHR.open('POST', 'http://localhost/lexuspos/src/php/login.php');
		XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

		XHR.send(urlEncodedData);
	}


	ajax_login(){
		$url = "http://localhost/src/php/login.php";
		$data = {
			email: $('#email').val(),
			password: $('#password').val()
		};

		$.ajax({
		  type: "POST",
		  url: url,
		  data: data,
		  beforeSend: function(){
		  	document.getElementById('progress').style.display = 'block';
		  },
		  success: function(data, xhr){

		  },
		  dataType: "json"
		});
	}

	validate(email, password){
		var emailReg =  "/^([w-.]+@([w-]+.)+[w-]{2,4})?$/";
		if(email === "" && password === ""){
			return false;
		}else if(email.match(emailReg)){
			return false;
		}
		return true;
	}
}

export { Staff };

// module.exports = { sugar };