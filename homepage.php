<?php
include 'connect.php';
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Poppins:wght@200;300;400&family=Raleway:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/style.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Poppins:wght@200;300;400&family=Rajdhani:wght@300&family=Raleway:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/normalize.css" class="css">
 <link rel="stylesheet" href="vendors/css/queries.css" class="css">   <!--  for making site responsive -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <div class="row">
                <img src="resources/css/img/logo.png" class="logo" alt="logo">
                <ul class="nav-list">                                     
                    <li><a href="#aboutus">About us</a></li>
                    <li><a href="#recipes">Recipes</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#signup">Contact us</a></li>
                    <li><a href="order.php">Order from us</a></li>
                    

                </ul>
            </div>
           
        </nav>
    <div class="box1">
    <p class="p1"> Explore Recipes</p><p class="p2">Taste the goodness of home</p><br>
    <a href="#recipes" class="btn btn1">Explore</a>
    <a href="#aboutus" class="btn btn2"> Show more</a>
</div>
</header>
<br>
<section id="aboutus">
    <p class="heading">The ART of food</p>
    <p class="subhead">"One cannot think well, love well, sleep well, if one has not dined well."</p>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <ion-icon  class="icons" name="planet-outline"></ion-icon>
              <h5 class="card-title">Around the world recipes</h5>
              <p class="card-text">Food trends come and go, but some ingredients are mainstays of the ‘foodie’ scene. Chefs love the envelope diners to curios, from unusual cuts of meat . </p>
             
            </div>
          </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <ion-icon class="icons" name="home-outline"></ion-icon>
                <h5 class="card-title">Special & indigenous</h5>
                <p class="card-text">We compiled a list of the most famous foods from around the world in order to determine the top 60 foods everyone should try at least once in their lifetime.</p>
               
              </div>
            </div>
          </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <ion-icon  class="icons" name="infinite-outline"></ion-icon>
              <h5 class="card-title">New foods to try</h5>
              <p class="card-text">From tray bakes to slow cookers, they're all the meal-time inspiration you need for this month.. Our goal is to help you experience local culture through food.</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="section-meals">
  <ul class="meals-showcase">
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img1.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img2.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img3.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img4.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
  </ul>
  <ul class="meals-showcase">
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img5.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img6.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img7.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
    <li>
      <figure class="meal-photo">
        <img src="resources/img/img8.jpeg" alt="img" class="foodPic">
      </figure>
    </li>
  </ul>

</section>


<section class="section-steps">
  <div class="container-fluid">
    <h2 class="howitworks">How it works--Simple as 1, 2, 3</h2>
    <div class="row">
      <div class="col-md-6 steps-box">
        <img src="resources/img/phone.png" alt="photo" class="phonepic">
      </div>
      <div class="col-md-6 steps-box1">
        <div class="works-step">
          <div>1</div>
          <p>Choose the plan that suits you best and signup</p>
        </div>
        <div class="works-step">
          <div>2</div>
          <p>Download the app</p>
        </div>
        <div class="works-step">
          <div>3</div>
          <p>You are done, start cooking!!</p>
        </div>
        <a href="" class="btn-app"><img src="resources/img/appstore.png"></a>
        <a href=""  class="btn-app"><img src="resources/img/playstore.png"></a>
      </div>
    </div>
  </div>
</section>

<br><br>

<section class="section-testimonials" id="team">
  <div class="row">
    <p class="head2"> Our favourite chefs</p>
  </div>
  <div class="row">
    <div class="col span-1-of-3 box11">
     <blockquote>
      A chef extraordinaire with almost 2 decades of experience, Chef Rishi Manucha was entrusted coveted position of Executive Chef for the iconic Food outlets of Taj Fort Aguada Resort & Spa. 
      <cite>
          <img src="resources/img/chef1.jpeg">Andrew Niche
      </cite>
     </blockquote>
    </div>
    <div class="col span-1-of-3 box11">
      <blockquote>
       A chef extraordinaire with almost 2 decades of experience, Chef Rishi Manucha was entrusted with position of Executive Chef for the iconic Food  outlets of Taj Fort Aguada Resort & Spa. 
       <cite>
           <img src="resources/img/chef2.jpeg">Andrew Niche
       </cite>
      </blockquote>
     </div>
     <div class="col span-1-of-3 box11">
      <blockquote>
       A chef extraordinaire with almost 2 decades of experience, Chef Rishi Manucha was entrusted with position of Executive Chef for the iconic Food outlets of Taj Fort Aguada Resort & Spa. 
       <cite>
           <img src="resources/img/chef3.jpeg">Andrew Niche
       </cite>
      </blockquote>
     </div>
  </div>
</section>

<section class="recipes" id="recipes">
  <div class="row reciperow">
    <p class="head3"> RECIPES</p>
    <form class="recipeform">
      <input type="search" id="searchInput" name="search" placeholder="  ...">
      <input type="submit" value="Search" id="searchbtn">
  </form>
  </div>
  <div class="row reciperow1">
    <div class="col span-1-of-2">
      <img src="resources/img/dish1.jpeg">
    </div>
    <div class="col span-2-of-2">
      <p class="type">Indian</p>
      <p class="dish">Dal Makhani</p>
      <p class="desc">Dal makhani is a dish originating in Punjab region.<br> A relatively modern variation of traditional lentil dishes,</p>
    </div>
  </div>
  <div class="row reciperow1">
    <div class="col span-1-of-2">
      <img src="resources/img/dish2.jpeg">
    </div>
    <div class="col span-2-of-2">
    <p class="type">Chinese</p>
      <p class="dish">Noodles</p>
      <p class="desc">Dal makhani is a dish originating in Punjab region.<br> A relatively modern variation of traditional lentil dishes,</p>
    </div>
  </div>
  <div class="row reciperow1">
    <div class="col span-1-of-2">
      <img src="resources/img/dish3.jpeg">
    </div>
    <div class="col span-2-of-2">
    <p class="type">Sweet</p>
      <p class="dish">Pancake</p>
      <p class="desc">Dal makhani is a dish originating in Punjab region.<br> A relatively modern variation of traditional lentil dishes,</p>
    </div>
  </div>
  <div class="row reciperow1">
    <div class="col span-1-of-2">
      <img src="resources/img/dish4.jpeg">
    </div>
    <div class="col span-2-of-2">
    <p class="type">Indian</p>
      <p class="dish">Curry</p>
      <p class="desc">Dal makhani is a dish originating in Punjab region.<br> A relatively modern variation of traditional lentil dishes,</p>
    </div>
  </div>
  <div class="row reciperow1">
    <div class="col span-1-of-2">
      <img src="resources/img/dish5.jpeg">
    </div>
    <div class="col span-2-of-2">
    <p class="type">Baked</p>
      <p class="dish">Cake</p>
      <p class="desc">Dal makhani is a dish originating in Punjab region.<br> A relatively modern variation of traditional lentil dishes,</p>
    </div>
  </div>

  <a href="" class="showmore">Show More</a>
</section>

<section class="section-form" id="signup">
  <div class="row">
    <p class="head4">We are happy to hear from you !</p>
  </div>
  <div class="row row22">
    <form action="#" method="POST">

      <div class="row">
        <div class="col span-1-of-3">
          <label>Name</label>
        </div>
        <div class="col span-2-of-3">
          <input type="text" name="name" placeholder="your name" required>
        </div><br>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <label>Email</label>
        </div>
        <div class="col span-2-of-3">
          <input type="email" name="email" placeholder="your email" required>
        </div>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <label>How did you find us?</label>
        </div>
        <div class="col span-2-of-3">
          <select name="findus" id="findus">
            <option value="friends">Friends</option>
            <option value="friends">Google</option>
            <option value="friends">Instagram</option>
            <option value="friends">Newspaper</option>
            <option value="friends">Other</option>

          </select>
        </div>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <label>Newsletter</label>
        </div>
        <div class="col span-2-of-3">
          <input type="checkbox" name="news" checked>
        </div>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <label>Comment</label>
        </div>
        <div class="col span-2-of-3">
          <textarea name="comment" id="comment" row="15" col="30"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col span-1-of-3">
          <label></label>
        </div>
        <div class="col span-2-of-3">
          <input type="submit" name="submit" value="Send" required>
        </div>
      </div>
    </form>
  </div>
</section>

<footer>

  <div class="row">
    <div class="col span-1-of-2">
      <ul class="footer-nav">
        <li><a href="">About us</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Press</a></li>
        <li><a href="">IOS app</a></li>
        <li><a href="">Android app</a></li>
      </ul>
    </div>
    <div class="col span-1-of-2">
      <ul class="socialinks">
        <li><ion-icon name="logo-facebook"></ion-icon></li>
        <li><ion-icon name="logo-twitter"></ion-icon></li>
        <li><ion-icon name="logo-google"></ion-icon></li>
        <li><ion-icon name="logo-instagram"></ion-icon></li>
      </ul>
    </div>
  </div>

  <div class="row row33">
    <p>Copyright &copy; 2023 by truekitchen. All rights reserved</p>
  </div>
</footer>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>