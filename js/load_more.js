

//  load more function 
document.addEventListener("DOMContentLoaded", function() {

var stat = document.getElementById("more-status-div");
stat.addEventListener("click",displayMoreStatus);
function displayMoreStatus(){
    		 
	ajaxGet("/statuses-1.html", function(string) { 
		document.getElementById("more-status-inject").innerHTML = string ;
		
		var replies = document.getElementsByClassName("link-reply");
	    for(var i = 10 ; i < 20 ; i++){
	        var reply = replies[i].addEventListener("click", callback(i) ); 
	        function callback(i){
	            return function (){

	              var replyId = "status-reply-"+i;
	              var fp = document.getElementById(replyId);
	              fp.toggle();

	            }

	        }
	    }

	})
	
}

});
