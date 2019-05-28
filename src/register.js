import { Staff } from './library/staff';

document.forms['register'].onsubmit = function(event){
	Staff.register();
	event.preventDefault(); // or return false;
}
