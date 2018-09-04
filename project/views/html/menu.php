<?php
error_reporting(0);
session_start();
if( $_SESSION['userSession']=="123"  || $_COOKIE['abc'] == "123" ){
   
    ?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.
css">
<link rel="stylesheet" href="../css/menuStyle.css">
<link rel="stylesheet" href="../css/weather-icons.min.css">



<div class="columns">
  <div class="column is-one-fifth">

      <aside class="menu">

  <ul class="menu-list" >

    <li>
        <a class="navbar-item" href="home.php" style="color:white" >
        Now 
        </a>
    </li>

    <li>
        <a class="navbar-item" href="social.php" style="color:white">
        social 
        </a>

        <a class="navbar-item" href="feedBack.php" style="color:white">
        Feedback
        </a>
    </li>

    <li>
        <a class="navbar-item" href="experts.php" style="color:white">
        Experts Analysis
        </a>
    </li>

  </ul>

    <ul class="menu-list">
    
    <li>
      <a style="color:white" >Forecast</a>
      <ul>
        <li><a style="color:white" href="hourly.php">Hourly</a></li>
        <li><a style="color:white" href="weekly.php">Weekly</a></li>
      </ul>
    </li>
  </ul>


<ul class="menu-list">
    
    <li>
      <a style="color:white" >Recommendation </a>
      <ul>
        <li><a style="color:white" href="health.php">Personalized </a></li>
        <li><a style="color:white" href="food.php">Food</a></li>
        <li><a style="color:white" href="travel.php">Travel</a></li>
        <li><a style="color:white" href="#">Movie</a></li>
        <li><a style="color:white" href="#">Music</a></li>
      </ul>
    </li>
  </ul>

  <ul class="menu-list">
    
    <li>
      <a style="color:white"  href="prayer.php">Prayer Time </a>
    </li>
  </ul>
        <ul>
        <li>
            <a class="navbar-item" href="userTips.php" style="color:white">
                Tips 
            </a>
        </li>
        </ul>

        <li>
            
                <button class="button is-primary" onclick="window.location.href='logout.php'">Logout</button>
           
        </li>

    </ul>

</aside>


  </div>


<!-- tiles starts -->
    <div class="column" >


       

        <div class="field has-addons">
            <div class="control">
                <input class="input" type="text" placeholder="City" id="fetch">
            </div>
            <div class="control">
                <a class="button is-info" id="searchButton">
                Search
                </a>
            </div>
        </div>
            
        <?php

        include "tile.php";

        ?>
        


  <!-- tiles End -->

  </div>
  


</div>

<?php 
}
else{
    header('location: ../../index.php');
}
?>

