<?php
    session_start();
    require 'db_connect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial;
    }
.bg{
  background-image: url("cin4.png");

}
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
      /*background-color: black;*/
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
      text-decoration: none;
      /*color:rgb(208, 29, 29) ;*/
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
      
    }

    .ha {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
    }
    

    .footer{
      background-color: rgb(128, 0, 0);
      display: flex;
      justify-content: center;
      align-items: flex-start;
      justify-content: space-around;
      padding-top: 100px;
padding-bottom: 100px;
    }
  </style>
  <title>BOOK NOW</title>
</head>

<body bgcolor="black" >

  <div class="bg">

  <h1>
    <p style="color: rgb(208, 29, 29); font-size:150px;margin-top: 0px; margin-bottom: 0px;">INOX</p>==$0
  </h1>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'HOME');color:rgb(208, 29, 29) ;"><a href="\rara\hall.php">HOME</a></button>
    <button class="tablinks" onclick="openCity(event, 'RATINGS')"><a href="\rara\Ratings.html">RATINGS</a></button>
    <button class="tablinks" onclick="openCity(event, 'ADD ONS')"><a href="\rara\addons.html" >ADD ONS</a></button>
    <button class="tablinks" onclick="openCity(event, 'VIP Pass')"><a href="\rara\vip.html" target="_blank">VIP PASS</a></button>
    <button class="tablinks" onclick="openCity(event, 'Customer Support')"><a  href="\rara\TandC.html" target="_blank">TERMS AND CONDITIONS</a></button>
  </div>
  <!-- <img class="Ha" src="cin.png" position: absolute;left: 0px;top: 0px;z-index: -1;> -->
  <!-- <h1 style="color: white; border:2px solid Tomato; background-color:rgb(1, 6, 11);">UPCOMING MOVIES<H1> -->
    <!-- <img src="cs.png" alt="Girl in a jacket" width="1500" height="400" style="padding-right: 60px;"> -->
    <img src="cs.png" alt="Girl in a jacket" width="1500" height="400" style="padding-right: 60px;">
      <marquee behavior="alternate" direction="left" scrollamount="20__________">
        <img src="upcoming1.jpg" width="300" height="400" alt="m1" style="padding-right: 60px;">__________________ 
        <img src="upcoming2.jpg" width="300" height="400" alt="m2" style="padding-right: 60px;">__________________ 
        <img src="upcoming3.jpg" width="300" height="400" alt="m3" style="padding-right: 60px;">__________________ 
        <img src="upcoming4.jpg" width="300" height="400" alt="m4" style="padding-right: 60px;">__________________ 
        <img src="upcoming5.jpg" width="300" height="400" alt="m5" style="padding-right: 60px;">__________________ 
      </marquee>
      <h1 style="color: red; background-color: black;">ONGOING MOVIES<h1>
        <img src="ongoing.png" alt="Girl in a jacket" width="1500" height="400" style="padding-right: 60px;">
          <img src="ongoing1.jpg" alt="Ramarao" width="300" height="400" style="padding-right: 60px;">
          <img src="ongoing2.jpg" alt="Thor" width="300" height="400" style="padding-right: 60px;">
          <img src="ongoing3.jpg" alt="HIT" width="300" height="400" style="padding-right: 60px;">
          <img src="ongoing4.jpg" alt="Girl in a jacket" width="300" height="400" style="padding-right: 60px;">

          <!-- <a href="date_try.php" target="_blank" name ="Ramarao" >click here</a>
          <a href="date_try.php" style="margin-left: 200px;" target="_blank" name = "Thor">click here</a>
          <a href="date_try.php" style="margin-left: 200px;" target="_blank">click here</a>
          <a href="/housefulll.html" style="margin-left: 200px;" target="_blank">click here</a> -->
          <form action="" method="post">
          <button type="submit" name="movie_1" style="margin-left:100px;margin right:500px;color: rgb(208, 29, 29);background-color:black;">Click Here</button>==$0
          <button type="submit" name="movie_2" style="margin-left:230px;margin right:500px;color: rgb(208, 29, 29);background-color:black;">Click Here</button>==$0
          <button type="submit" name="movie_3" style="margin-left:200px;margin right:500px;color: rgb(208, 29, 29);background-color:black;">Click Here</button>==$0
          <button type="submit" name="movie_4" style="margin-left:200px;margin right:500px;color: rgb(208, 29, 29);background-color:black;">Click Here</button>==$0
          </form>
          <?php
          if($_SERVER['REQUEST_METHOD']=="POST")
          {
            // echo "Anmol";
          if(isset($_POST['movie_1']))
          {
              $_SESSION['name'] = "ramarao";
              $_SESSION['time'] = "";
              $_SESSION['hrs'] = "";
            // echo "Foram";
            // header("location: feedback.html");
            ?>
            <script>window.location.href = "date_try.php";</script>
            <?php
            // exit;
          }
          if(isset($_POST['movie_2']))
          {
            // echo "Foram";
            // header("location: feedback.html");
            $_SESSION['name'] = "Thor";
            $_SESSION['time'] = "";
            $_SESSION['hrs'] = "";
            ?>
            <script>window.location.href = "date_try.php";</script>
            <?php
            // exit;
          }if(isset($_POST['movie_3']))
          {
            // echo "Foram";
            // header("location: feedback.html");
            $_SESSION['name'] = "HIT";
            $_SESSION['time'] = "";
            $_SESSION['hrs'] = "";
            ?>
            <script>window.location.href = "date_try.php";</script>
            <?php
            // exit;
          }
        }

?>
          <!-- <button name="movie" value = "Ramarao ">click here</button> -->
          <video width="600" height="600" controls>
            <source src="Cineoffer.mp4" type="video/mp4"></video>

          <!-- <div id="London" class="tabcontent">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
          </div>

          <div id="RATINGS" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
          </div>

          <div id="ADD ONS" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div> -->
        </div>
          <footer class="footer">
                <div class="item">
                    <h2>Help & Support</h2>

                    <p><a href="\rara\TandC.html">Help & Support</a></p>
                </div>
                <div class="item">
                    <h2>Contact</h2>

                    <p><a href="\rara\contacts.html">Contact us</a></p>
                    <p><a href="\rara\contacts.html">E-mail</a></p>
                </div>
                <div class="item">
                    <h2>Social links</h2>

                    <ul class="space-y-2">
                        <ul><a href="#">Facebook</a></ul>
                        <ul><a href="#">Twitter</a></ul>
                        <ul><a href="#">Instagram</a></ul>
                    </ul>
                </div>
        </footer>
          <!-- <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
          </script> -->
          

</body>

</html>