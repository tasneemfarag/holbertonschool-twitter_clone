

document.addEventListener("DOMContentLoaded", function(event) { 

    var replies = document.getElementsByClassName("link-reply");
    for(var i = 0 ; i < replies.length ; i++){
        var reply = replies[i].addEventListener("click", callback(i) ); 
        function callback(i){
            return function (){
              console.log(i);

              var replyId = "status-reply-"+i;
              console.log(replyId);
              var fp = document.getElementById(replyId);
              if (fp.style.display=='block')
              {
                fp.style.display = 'none';
              }
              else {
                fp.style.display = 'block';
              }


            }

        }
    }


});

