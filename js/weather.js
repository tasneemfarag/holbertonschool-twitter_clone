document.addEventListener("DOMContentLoaded", function(event) {

	console.log("here");

	var script=document.createElement("script");
	script.type= "text/javascript";
	script.src="https://holberton-weather-api.herokuapp.com/weather.js?json_callback=callback" ;
	document.body.appendChild(script);	

	function callback(data){ 
		console.log(data);
	}

});
