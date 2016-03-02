

document.addEventListener("DOMContentLoaded", function(event) { 

    // for (var i = 1; i < 5 ; i++) {
    //     var linkId = "link-reply-"+i;
    //     var status_reply = document.getElementById(linkId).addEventListener("click", displayPost(i) );
    // }

    // function displayPost(j){
    //       console.log(j);
    //       var replyId = "status-reply-"+j;
    //        console.log(replyId);
    //       var fp = document.getElementById(replyId);
    //       if (fp.style.display=='block')
    //       {
    //         fp.style.display = 'none';
    //       }
    //       else {
    //         fp.style.display = 'block';
    //       }
    // }


    var replies = document.getElementsByClassName("link-reply");

    for(var i = 0 ; i < replies.length ; i++){
      
        var reply = replies[i].addEventListener("click", callback(i) );

        function callback(i){
            
            function displayNumber(){
              var j = i ; 
              console.log(j);
            }
            return displayNumber();
            
        }

        // function callback(){ 
        //     console.log("outside function");
        //     var j = i ;
        //     function displayNumber(){
        //         console.log("inside function");
        //          console.log(j);
        //     }
        //     return displayNumber;
        // }

    }


});

