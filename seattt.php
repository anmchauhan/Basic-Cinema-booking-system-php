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
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
      text-decoration: none;
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
    <p style="color: rgb(208, 29, 29); font-size:150px;margin-top: 0px; margin-bottom: 0px;">INOX</p>
  </h1>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'HOME')"><a href="\hall.html">HOME</a></button>
    <button class="tablinks" onclick="openCity(event, 'RATINGS')"><a  href="\Ratings.html" target="_blank">RATINGS</a></button>
    <button class="tablinks" onclick="openCity(event, 'ADD ONS')"><a  href="\addons.html" target="_blank">ADD ONS</a></button>
    <button class="tablinks" onclick="openCity(event, 'VIP Pass')"><a  href="\vip.html" target="_blank">VIP PASS</a></button>
    <button class="tablinks" onclick="openCity(event, 'Customer Support')"><a  href="\TandC.html" target="_blank">TERMS AND CONDITIONS</a></button>
  </div>

  <form action="seattt.php" method="post">
    <label for="fname" style="color: white;">Seat No.:</label>
    <input type="text" id="seatt" name="seatt"><br><br>
    <label for="fname" style="color: white;">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname" style="color: white;">Email:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" name="btn" value="Submit">
  </form>
  <?php
      if($_SERVER['REQUEST_METHOD']=="POST")
      {
        if(isset($_POST['btn']))
        {
          $seat = $_POST['seatt'];
          $name = $_POST['fname'];
          $mail = $_POST['lname'];
          $movie = $_SESSION['name'];
          $date = $_SESSION['time'];
          $time = $_SESSION['hrs'];

          $q = "INSERT INTO `theatre`(`Movie`,`Date`,`Time`,`Name`,`Phone`,`Seat`) VALUES ('$movie','$date','$time','$name','$mail','$seat')";
          $res = mysqli_query($conn,$q);
          if($res)
          {
            header("location: submit.html");
          }
        }
      }
  ?>
  <img src="seatarran.png" alt="Girl in a jacket" width="1800" height="600" style="padding-right: 20px;">
</div>
<footer class="footer">
      <div class="item">
          <h2>Help & Support</h2>

          <p><a href="/TandC.html">Help & Support</a></p>
      </div>
      <div class="item">
          <h2>Contact</h2>

          <p><a href="/contacts.html">Contact us</a></p>
          <p><a href="/contacts.html">E-mail</a></p>
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
<script>
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
</script>


</body>

</html>