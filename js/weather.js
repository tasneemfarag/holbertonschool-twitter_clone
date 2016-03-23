
// chaning the weather status
var cb = function(json){ 
	document.getElementById("weather").innerHTML = json.current_weather ;
}

// calling the jsonp script
// var script=document.createElement("script");
// script.src="https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=cb" ;
// document.body.appendChild(script);	


// update the weather with the button 
document.getElementById("update-weather-btn").addEventListener("click", function(){ 

	var script=document.createElement("script");
	script.src="https://holberton-weather-api.herokuapp.com/weather.js?jsonp_callback=cb" ;
	document.body.appendChild(script);	
	
});
