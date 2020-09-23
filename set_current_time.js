var date = new Date();

var hour = date.getHours();
var min = date.getMinutes();

var time = hour + ":" + min;

var current_date = date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate();
document.getElementById("date").value = current_date;

options = document.getElementsByClassName("res-time");

for (var i = 0; i < options.length; i++) {

	var hours_and_mins = options[i].value.split(':');
	var res_hour = hours_and_mins[0];
	var res_min = hours_and_mins[1];

	if (parseInt(res_hour) <= parseInt(hour) && parseInt(res_min) <= parseInt(min))
		options[i].disabled = true;


} 


