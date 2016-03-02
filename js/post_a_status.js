document.addEventListener("DOMContentLoaded", function(event) { 

  var lp = document.getElementById("link-post").addEventListener("click", displayPost);

  function displayPost() {
    var fp = document.getElementById('form-post');
    if (fp.style.display=='block')
    {
    	fp.style.display = 'none';
    }
    else {
    	fp.style.display = 'block';
    }
  }


});