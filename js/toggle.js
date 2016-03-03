


HTMLElement.prototype.toggle = function() {
	  // this.style.color = 'red';
	  if (this.style.display=='block'){
	        this.style.display = 'none';
	   }
	   else {
	       this.style.display = 'block';
	   }
}




document.addEventListener("DOMContentLoaded", function(event) { 


	 var lp = document.getElementById("link-post").addEventListener("click", displayPost);

	  function displayPost() {
	    var fp = document.getElementById('form-post');
	    fp.toggle();

	  }


});








