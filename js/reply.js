

var replies = document.getElementsByClassName("link-reply");
for(var i = 0 ; i < replies.length ; i++){
    var reply = replies[i].addEventListener("click", callback(i) ); 
    function callback(i){
        return function (){

          var replyId = "status-reply-"+i;
          var fp = document.getElementById(replyId);
          fp.toggle();

        }

    }
}




