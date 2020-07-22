<?php session_start(); ?>
<!DOCTYPE html>
<head>
  <title></title>
  <!-- Required meta tags -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="Bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="Bootstrap4/fontawesome-5.12.0/css/all.min.css">
  <script src="Bootstrap4/fontawesome-5.12.0/js/all.min.js"></script>
  <script src="Bootstrap4/js/jquery.min.js"></script>
  <script src="Bootstrap4/js/popper.min.js"></script>
  <script src="Bootstrap4/js/bootstrap.min.js"></script>
  <style type="text/css">
</head>
<body>
 </body>

<style>
  body, html {height: 90%;}
    .row{margin-top: 30px;
        font-size: 10pt;
      text-align: center;}
/* Make the image fully responsive */
    .carousel-inner img { 
      max-height:450px;
      border-radius: 1%; }
    #img{
      height: 40px;
      border-radius: 100%;}
    #box1{
      background-color:white;
      padding: 50px;}
</style>

<!--- nav --->
<div class="nav">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top" style="">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="images/po.jpg" id="img" alt="logo" style="width:40px;">
  </a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <i class="fas fa-home"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="databus.php">
        <i class="fas fa-bus"></i> Data Bus</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="datapemesan.php">
        <i class="fas fa-store"></i> Data Pemesan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transaksi.php">
      <i class="fas fa-book"></i> Transaksi</a>
    </li>
  </ul>
</nav>
</div>
<!----end---->
<!-----caraousal---->
<div class="container-fluid" style="padding-top:6%;padding-bottom:1.5%;background-color: lightgrey;
  border-radius: 1%;">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/1.jpg" class="d-block w-100"alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5></h5>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/2.jpg" class="d-block w-100"alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5></h5>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/3.jpg" class="d-block w-100"alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5></h5>
    </div>
  </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<!-----end---->
<!-----Isi----->
<div class="container-fluid" id="box1">
  <div class ="row">

  <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

  <div class="col"style="border-left:3px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>


  <div class="col"style="border-left:3px solid black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
  </div>
</div>
<!-----end----->
<!------Footer---->
<footer style="text-align: center;background-color: lightblue;padding: 3px;">
  <p>Author: Hege Refsnes<br>
  <a href="mailto:hege@example.com">hege@example.com</a></p>
</footer>
<!----end------>
</body>
</html