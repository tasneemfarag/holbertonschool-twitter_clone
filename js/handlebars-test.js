
document.addEventListener("DOMContentLoaded", function() {

var statuses = [
    {
      "name" : "Julien Barbier",
      "image_path" : "img/julien.jpg",
      "date" : "1 min",
      "number" : "10",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Rudy Rigot",
      "image_path" : "img/rudy.png",
      "date" : "12 h",
      "number" : "11",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Sylvain Kalache",
      "image_path" : "img/sylvain.jpeg",
      "date" : "Jan 25",
      "number" : "12",
      "post" : "WOW! so trending <a href='http://impossibleoctopus.tumblr.com/post/138821243924/impossible-octopus-fitness'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Sophie Barbier",
      "image_path" : "img/sophie.jpeg",
      "date" : "Jan 24",
      "number" : "13",
      "post" : "The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other #impossibleoctopus <a href='https://octopus-fitness-impossible.github.io/impossible-octopus-fitness/impossible-octopus-fitness.html'> http://impossibleoctopus.tumblr.com </a>"
    },
    {
      "name" : "Julien Barbier",
      "image_path" : "img/julien.jpg",
      "date" : "1 min",
      "number" : "14",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Rudy Rigot",
      "image_path" : "img/rudy.png",
      "date" : "12 h",
      "number" : "15",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Sylvain Kalache",
      "image_path" : "img/sylvain.jpeg",
      "date" : "Jan 25",
      "number" : "16",
      "post" : "WOW! so trending <a href='http://impossibleoctopus.tumblr.com/post/138821243924/impossible-octopus-fitness'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Sophie Barbier",
      "image_path" : "img/sophie.jpeg",
      "date" : "Jan 24",
      "number" : "17",
      "post" : "The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other #impossibleoctopus <a href='https://octopus-fitness-impossible.github.io/impossible-octopus-fitness/impossible-octopus-fitness.html'> http://impossibleoctopus.tumblr.com </a>"
    },
    {
      "name" : "Julien Barbier",
      "image_path" : "img/julien.jpg",
      "date" : "1 min",
      "number" : "18",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    },
    {
      "name" : "Rudy Rigot",
      "image_path" : "img/rudy.png",
      "date" : "12 h",
      "number" : "19",
      "post" : "This Tweet is so funny <a href='https://twitter.com/octopus_fitness/status/696119360419553280'> https://twitter.com/octopus_fitness </a> #impossibleoctopus"
    }
  ];

// console.log( statuses );

var theTemplateNode = document.getElementById("handlebars-test");
// console.log( theTemplateNode );
var theTemplateScript = document.getElementById("handlebars-test").innerHTML;
// console.log( theTemplateScript );
 var theTemplate = Handlebars.compile(theTemplateScript);  
// console.log( theTemplate );
document.body.innerHTML += theTemplate(statuses);

});



// var theData = {headerTitle:'Shop Page', weekDay:'Wednesday'};  
// var theTemplateNode = document.getElementById("handlebars-test");
// console.log( theTemplateNode );
// var theTemplateScript = document.getElementById("handlebars-test").innerHTML;
// console.log( theTemplateScript );
//  var theTemplate = Handlebars.compile(theTemplateScript);  
// console.log( theTemplate );
// document.body.innerHTML += theTemplate(theData);





// {{#each Posts}}
// <script id="statuses-template" type="text/x-handlebars-template">

//   <div class="main-box status-box">
//     <div class="main-box-content">
//       <img src="{{image_path}}"  alt="" class="photo" />
//     <p>  <a class="name" href="#"> {{name}}  </a> - {{date}}  </p>
//     <p class="article">
//        {{post}}
//     </p>
//     </div>
//     <div class="main-box-reaction">
//        <a  href="#"  class="link-reply" id="link-reply-{{number}}" > Reply </a> 
//         <form action="action_page.php" method="get" class="status-reply" id="status-reply-{{number}}">
//           <textarea name="post" rows="10" cols="70" placeholder="Write your post..." >
//           </textarea>
//           <input type="checkbox" name="location" value="location">include location
//           <br><br>
//           <input type="submit" value="Post">
//         </form>
//     </div>
//   </div>

// </script>
// {{#each Concerts}}




