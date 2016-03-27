
document.addEventListener("DOMContentLoaded", function(event) { 

   document.getElementById("form-post").style.display = 'none';


   var lp = document.getElementById("link-post").addEventListener("click", displayPost);

    function displayPost() {
      var fp = document.getElementById('form-post');
      fp.toggle();

    }


});

