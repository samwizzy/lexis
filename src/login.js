import { Staff } from './library/staff';

// document.getElementsByClassName('login-form')[0]
document.forms['login'].onsubmit = function(event){
	Staff.login();
	event.preventDefault(); // or return false;
}