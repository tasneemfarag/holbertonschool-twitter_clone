<?php

  $login = $_POST["login"];
  $password = $_POST["password"];

$users = [
    array("id" => 1, "login" => "user1", "password" => "password1", "full_name" => "User 1"),
    array("id" => 2, "login" => "user2", "password" => "password2", "full_name" => "User 2"),
    array("id" => 3, "login" => "user3", "password" => "password3", "full_name" => "User 3"),
  ];

//check if login exists and if it does it will return the id and if it doesn't it will return -1
function userExists($login, $password, $users){
  
      
      foreach ($users as &$elem) {
      if ($elem["login"] == $login && $elem["password"] == $password ){
       return $elem["id"];} 

   
      }

     return -1; 
    
}


      ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://help.github.com/assets/images/site/favicon.ico">
    <title>the Impossible Octopus Fitness Wall  | Impossible Octopus Fitness </title>
    <meta name="description" content="The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <meta name="author" content="afrancisboeuf-tasneemfarag">
    <!-- CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500italic,700italic,900,400italic,300italic,300' rel='stylesheet' type='text/css'>

     <!-- Javascript-->
     <script src="js/behavior.js"></script>
     <!-- <script  src="js/handlebars-v4.0.5.js" /> </script> -->

    <!-- Open Graph (for social media) -->
    <meta property="og:title" content="The Impossible Octopus Fitness Wall | Impossible Octopus Fitness" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://octopus-fitness-impossible.github.io/impossible-octopus-fitness/" /> 
    <meta property="og:image" content="http://octopus-fitness-impossible.github.io/impossible-octopus-fitness/img/octocat.png" />
    <meta property="og:description" content="The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other" />
    <meta property="og:site_name" content="Impossible Octopus Fitness" />
    <meta property="fb:app_id" content="952924341466972" />

    <!-- Twitter cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@octopus_fitness">
    <meta name="twitter:title" content="The Impossible Octopus Fitness Wall | Impossible Octopus Fitness">
     <meta name="twitter:description" content="The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other">
    <meta name="twitter:image" content="http://octopus-fitness-impossible.github.io/impossible-octopus-fitness/img/octocat.png">
  </head>

<!-- Container-->
<body>

<div class="container">


<!-- Header-->
<header>

      <div class="header-box">

        <div class="upper-nav" >
          
          <img src="img/octocat.png"  alt="alt" height = "70" /> 

          <ul class="top-menu" >
            <li  class= "menu-inline" >  <a href="#" > Edit My profile </a> </li>
            <li  class= "menu-inline" style="border-left: 1px solid #44a4ee">  <a href="#" > Logout </a> </li>
            <i> <?php 
            
            if (empty($login) || empty($password)){
        echo 'Hello, there!';
        }else {    $exist = userExists($login, $password, $users); 
                if ($exist < 0){
                    echo '<br>Hello, there!'; 
                    echo "<br><font color='red'>Invalid credentials</font>";
                } else {
                  echo '<br>Hello ' . $users[$exist -1]["full_name"] . '!';
                  echo '<br> Your rot13’d login is: ' . str_rot13 ( $login );
                  echo ' <br>The length of your login is: ' . strlen($login);;
      }}
             

             ?></i>
          </ul>

        </div >
        
        <div class="menu-box">


           <ul  class= "tagline" >
            <li > The Impossible Fitness Octopus Wall </li>
           </ul>
                <button id="nav-button">  Menu </button>

                 <ul  class= "menu" >
                 
                  <li  >  <a href="index.html" class= "menu-item" > Home </a> </li>
                  <li  >  <a href="user.html" class= "menu-item" > My Status </a>  </li>
                  <li  >  <a href="userslist.html" class= "menu-item" > All Users </a>  </li>
                </ul>

      </div >



    </div>

</header>


<div class="columnContent" >

<!-- column content -->
<div class="columnFeed columnLeft" >


   <div class="main-box">
      <a  href="#" id="link-post" > Post a status </a> 
      <br> 
      <br>
     


 


      <form action="action_page.php" method="get" id="form-post">
       
         <label for="textarea00"></label>
          <textarea  id="textarea00" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

        <input type="checkbox" name="location" value="location" id="location">
          <label for="location">include location</label> 
          <br><br>
        <input type="submit" value="Post">
      </form>
  </div>  

  <!--
   <script id="handlebars-test" type="text/x-handlebars-template">​
      <link rel="stylesheet" href="css/style.css">

       {{#each this}} ​
       <div class="main-box status-box">
          <div class="main-box-content">
            <img src="{{image_path}}"   alt="alt"  class="photo" />
          <p>  <a class="name" href="#"> {{name}}  </a> - {{date}}  </p>
          <p class="article">
             {{post}}
          </p>
          </div>
          <div class="main-box-reaction">
             <a  href="#"  class="link-reply" id="link-reply-{{number}}" > Reply </a> 
              <form action="action_page.php" method="get" class="status-reply" id="status-reply-{{number}}">
                <textarea name="post" rows="10" cols="70" placeholder="Write your post..." >
                </textarea>
                <input type="checkbox" name="location" value="location">include location
                <br><br>
                <input type="submit" value="Post">
              </form>
          </div>
        </div>
        {{/each}}

    ​</script>
  -->



  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/julien.jpg" alt="alt" class="photo" />
      <p>  <a class="name" href="#"> Julien Barbier</a> - 1 min </p>
      <p class="article">
        This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
      </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"   class="link-reply"  id="link-reply-0" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply"  id="status-reply-0">
          <label for="textarea0"></label>
          <textarea  id="textarea0" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" name="location" value="location" id="location0">
          <label for="location0">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>
   

  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/rudy.png"  alt="alt" class="photo" />
    <p>  <a class="name" href="#"> Rudy Rigot </a> - 12 h </p>
    <p class="article">
       This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
    </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"  class="link-reply" id="link-reply-1" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-1">
           <label for="textarea1"></label>
          <textarea  id="textarea1" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>
         <input type="checkbox" name="location" value="location" id="location1">
          <label for="location1">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>


  <div class="main-box status-box">
    <div class="main-box-content">
       <img src="img/sylvain.jpeg"  alt="alt" class="photo" />
    <p>  <a class="name" href="#"> Sylvain Kalache </a> - Jan 25 </p>
    <p class="article">
       WOW! so trending <a href="http://impossibleoctopus.tumblr.com/post/138821243924/impossible-octopus-fitness"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
    </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#" class="link-reply" id="link-reply-2" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-2">
          <label for="textarea2"></label>
          <textarea  id="textarea2" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" name="location" value="location" id="location2">
          <label for="location2">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>


  <div class="main-box status-box">
    <div class="main-box-content">
        <img src="img/sophie.jpeg"  alt="alt" class="photo" />
       <p>  <a class="name" href="#"> Sophie Barbier </a> - Jan 24 </p>
      <p class="article">
        The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other #impossibleoctopus <a href="https://octopus-fitness-impossible.github.io/impossible-octopus-fitness/impossible-octopus-fitness.html"> http://impossibleoctopus.tumblr.com </a> 
      </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#" class="link-reply" id="link-reply-3" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-3">
           <label for="textarea3"></label>
          <textarea  id="textarea3" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" name="location" value="location" id="location3">
          <label for="location3">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>  


  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/julien.jpg" alt="alt" class="photo" />
      <p>  <a class="name" href="#"> Julien Barbier</a> - 1 min </p>
      <p class="article">
        This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
      </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"   class="link-reply"  id="link-reply-4" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply"  id="status-reply-4">
           <label for="textarea4"></label>
          <textarea  id="textarea4" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" name="location" value="location" id="location4">
          <label for="location4">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>
   

  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/rudy.png"  alt="alt" class="photo" />
    <p>  <a class="name" href="#"> Rudy Rigot </a> - 12 h </p>
    <p class="article">
       This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
    </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"  class="link-reply" id="link-reply-5" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-5">
           <label for="textarea5"></label>
          <textarea  id="textarea5" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>
         <input type="checkbox" name="location" value="location" id="location5">
          <label for="location5">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>


  <div class="main-box status-box">
    <div class="main-box-content">
       <img src="img/sylvain.jpeg"  alt="alt" class="photo" />
    <p>  <a class="name" href="#"> Sylvain Kalache </a> - Jan 25 </p>
    <p class="article">
       WOW! so trending <a href="http://impossibleoctopus.tumblr.com/post/138821243924/impossible-octopus-fitness"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
    </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#" class="link-reply" id="link-reply-6" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-6">
           <label for="textarea6"></label>
          <textarea  id="textarea6" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" name="location" value="location" id="location6">
          <label for="location6">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>


  <div class="main-box status-box">
    <div class="main-box-content">
        <img src="img/sophie.jpeg"   alt="alt"  class="photo" />
       <p>  <a class="name" href="#"> Sophie Barbier </a> - Jan 24 </p>
      <p class="article">
        The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other.The Impossible Octopus Fitness Wall is a group of fit octopuses trying to share their best practices each other #impossibleoctopus <a href="https://octopus-fitness-impossible.github.io/impossible-octopus-fitness/impossible-octopus-fitness.html"> http://impossibleoctopus.tumblr.com </a> 
      </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#" class="link-reply" id="link-reply-7" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-7">
          <label for="textarea7"></label>
          <textarea  id="textarea7" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

         <input type="checkbox" name="location" value="location" id="location7">
          <label for="location7">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>  


  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/julien.jpg" alt="alt"  class="photo" />
      <p>  <a class="name" href="#"> Julien Barbier</a> - 1 min </p>
      <p class="article">
        This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
      </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"   class="link-reply"  id="link-reply-8" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply"  id="status-reply-8">


          <label for="textarea8"></label>
          <textarea  id="textarea8" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>


          <input type="checkbox" name="location" value="location" id="location8">
          <label for="location8">include location</label> 
          <br><br>
          <input type="submit" value="Post">
        </form>
    </div>
  </div>
   

  <div class="main-box status-box">
    <div class="main-box-content">
      <img src="img/rudy.png"   alt="alt" class="photo" />
    <p>  <a class="name" href="#"> Rudy Rigot </a> - 12 h </p>
    <p class="article">
       This Tweet is so funny <a href="https://twitter.com/octopus_fitness/status/696119360419553280"> https://twitter.com/octopus_fitness </a> #impossibleoctopus
    </p>
    </div>
    <div class="main-box-reaction">
       <a  href="#"  class="link-reply" id="link-reply-9" > Reply </a> 
        <form action="action_page.php" method="get" class="status-reply" id="status-reply-9">
          
          <label for="textarea9"></label>
          <textarea  id="textarea9" name="post" rows="10" cols="70" placeholder="Write your post..." >
          </textarea>

          <input type="checkbox" value="location" id="location9">
          <label for="location9">include location</label> 

          <br><br>
          <input type="submit" value="Post">

        </form>



    </div>
  </div> 
  
  <div id="more-status-inject"></div>

  <div id="more-status-div">
    <button id="more-status-btn" class="follow" >See more statuses..</button>
  </div>
  
  
</div>


<!-- column aside -->
<div class="columnAside columnRight" >

  <div class="bottom-box main-box ">
     <div>  Suggestion  </div>
  
     <div class="usertofollow">
    <img src="img/rona.jpg"  alt="alt"  class="photo" /> 
    <a class="name"  href="#">Rona Chong</a>
     <p>
      Banal Octopus
     </p>
     <div  class="btn-follow"> <button class="follow"> Follow </button> </div >   
    </div>

    <div class="usertofollow">
    <img  src="img/steven.jpg" alt="alt"   class="photo" /> 
    <a class="name"  href="#">Steven Garcia</a>
     <p>Software Otopus</p>
     <div  class="btn-follow"> <button class="follow"> Follow </button> </div > 
    </div>

    
     <div class="usertofollow">
    <img src="img/sravanthi.jpg"   alt="alt"   class="photo" /> 
    <a class="name" href="#">Sravanthi Sinha</a>
     <p>Happy Octopus</p>
     <div  class="btn-follow"> <button class="follow"> Follow </button> </div > 
    
    </div>
 
 </div>

  <div class="bottom-box">

    <div class="main-box ">
     <div>  Suggestion  </div>
       <ul  class= "" >
            <li >   <a href="https://www.tumblr.com/blog/impossibleoctopus">#ImpossibleOctopus</a>  </li>
            <li  >  <a href="https://twitter.com/octopus_fitness">#OctopusFitness</a>   </li>
            <li  >  <a href="https://en.wikipedia.org/wiki/Octopus">#Octopus</a> </li>
            <li  >   <a href="http://impossiblehq.com/fitness/">#ImpossibleFitness</a> </li>
       </ul>
    </div>
    
    <div class="main-box">
      © 2016 ImpossibleFitness <a href="impossible-octopus-fitness.html">About Octopus</a>
      <!-- <a href="maps.html">Adress</a><br> -->
    </div>
  
    <div class="main-box">
      <p>It's <span id="weather">an unknown weather</span> today!</p>
    </div>

    <div id="update-weather-div">
      <button id="update-weather-btn" class="follow" >Update weather</button>
    </div>



  </div>

  <div class="bottom-box">
    <p class="welcome "> Welcome this is our application in beta</p>
  </div>
  
</div>


</div >
</div >


<footer class="foot" >
   <div class="container-foot">
  <!-- <image src="img/dark-background.jpg" > -->
       <ul  class= "" >
            <li  class= "li-foot" >  <a href="index.html" class= "link-foot" > Home </a> </li>
            <li class= "li-foot" >  <a href="user.html" class= "link-foot"  > My Status </a>  </li>
            <li  class= "li-foot" >  <a href="userslist.html" class= "link-foot"   > All Users </a>  </li>
       </ul>
  </div >
</footer>





<script src="js/toggle.js"></script>
<script src="js/post_a_status.js"></script>
<script src="js/reply.js"></script>
<script src="js/ajax.js"></script>
<script src="js/load_more.js"></script>
<script src="js/weather.js"></script>
<!-- <script src="js/handlebars-test.js"></script> -->

</body>

</html>



