
// factorizing ajax function
ajaxGet = function(url, onSuccess){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) {
		onSuccess(xhttp.responseText);
	}
	};
	xhttp.open("GET", url , true);
	// creating a wait button
    document.getElementById("more-status-btn").disabled = true;
    document.getElementById("more-status-btn").style.cursor = "wait";
    document.getElementById("more-status-btn").style.color = "grey";
	setTimeout(function(){
		xhttp.send();
		document.getElementById("more-status-btn").disabled = false;
		document.getElementById("more-status-btn").style.cursor = "default";
		document.getElementById("more-status-btn").style.color = "#44a4ee";
	}, 2000);
}
