document.addEventListener("DOMContentLoaded", function(event) { 
 /* var lp = document.getElementById('link-post');
  var fp = document.getElementById('form-post');
  function myFunction() {
  	if (fp.style.visibility==hidden)
     { fp.style.visibility =visible}
  } 

document.getElementById('link-post').onclick=function(){
  // Remove any element-specific value, falling back to stylesheets
  document.getElementById('form-post').style.display='visible';
};


function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'hidden')
          e.style.display = 'visible';
       else
          e.style.display = 'hidden';
  } 

 document.getElementById('link-post').onclick=function() { 
    // get the clock 
   // var lp = document.getElementById('link-post');

    // get the current value of the clock's display property 
    //var displaySetting = myClock.style.display;

    // also get the clock button, so we can change what it says 
    var fp = document.getElementById('form-post');
				
    // now toggle the clock and the button text, depending on current state
    if (fp == 'hidden') { 
      // clock is visible. hide it
      fp.style.display = 'visible';
      // change button text
      //clockButton.innerHTML = 'Show clock';
    }
    else { 
      // clock is hidden. show it 
      fp.style.display = 'hidden';
      // change button text
      //clockButton.innerHTML = 'Hide clock';
    }
  }  

function show(target) {
    document.getElementById(target).style.display = 'block';
} */  
//var lp = document.getElementById('link-post'); 



 var lp = document.getElementById("link-post").addEventListener("click", displayPost);

function displayPost() {
  var fp = document.getElementById('form-post');
if (fp.style.display=='none')
{
	fp.style.display = 'block';
}
else {
	fp.style.display = 'none';
}
    //document.getElementById('form-post').style.display = 'block';
}


});