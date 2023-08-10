<?php
  session_start();
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
<body bgcolor="Black">
  <div class="bg">
    <h1>
      <p style="color: rgb(208, 29, 29); font-size:150px;margin-top: 0px; margin-bottom: 0px;">INOX</p>
    </h1>

<p style="color:rgb(247, 0, 0)">Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'HOME')"><a href="\home.html">HOME</a></button>
  <button class="tablinks" onclick="openCity(event, 'RATINGS')"><a  href="\Ratings.html" target="_blank">RATINGS</a></button>
  <button class="tablinks" onclick="openCity(event, 'ADD ONS')"><a  href="\addons.html" target="_blank">ADD ONS</a></button>
  <button class="tablinks" onclick="openCity(event, 'VIP Pass')"><a  href="\vip.html" target="_blank">VIP PASS</a></button>
  <button class="tablinks" onclick="openCity(event, 'Customer Support')"><a  href="\TandC.html" target="_blank">TERMS AND CONDITIONS</a></button>
</div>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>

<h2>Select the time accroding your choice</h2>
<div class="dropdown" style="
    margin-left: 700px;">

<div class="dropdown">
  <button class="dropbtn">Time</button>
  <!-- <div class="dropdown-content">
    <a href="seattt.html">9:00 AM</a>
    <a href="seattt.html">12:00 AM</a>
    <a href="seattt.html">3:00 AM</a>
  </div> -->
  <form action="time_try.php" method="post">
  <select name="time" id="time">
    <option value="1">9:00 AM</option>
    <option value="2">12:00 AM</option>
    <option value="3">3:00 AM</option>
  </select>
  <button type="submit" name="btn">Submit</button>
  </form>
  <?php
if(isset($_POST['btn']))
{
    if($_POST['time']=='1')
    {
      $_SESSION['hrs'] = "9:00 AM";
      header("location: seattt.php");
    }
    if($_POST['time']=='2')
    {
      $_SESSION['hrs'] = "12:00 AM";
      header("location: seattt.php");
    }
    if($_POST['time']=='3')
    {
      $_SESSION['hrs'] = "3:00 AM";
      header("location: seattt.php");
    }
  }
?>
</div>
</div>
  <footer class="footer" style="    padding-top: 100px;
  border-top-width: 400px;
  margin-top: 250px;">
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

