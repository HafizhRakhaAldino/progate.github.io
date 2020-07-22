<?php session_start(); ?>
<!DOCTYPE html>
<html>
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
    width: 100%;
    height: 100%;}

    #box1{
    background-color: lightgrey;
    padding: 50px;}

 </style>

<!--- nav --->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top" style="">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="bird.jpg" alt="logo" style="width:40px">
  </a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">
        <i class="fas fa-home"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="databus.php">
        <i class="fas fa-bus"></i> Data Bus</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-store"></i> Data Pemesan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transaksi.php">
      <i class="fas fa-book"></i> Transaksi</a>
    </li>
  </ul>
</nav>
<!----end---->

<!-- Page Content -->
<div class="container-fluid">
    <!-- /.col=lg-9 -->
<div class="col-lg-14 mt-1">

    <h1 class="font-weight-bold mt-1" style="text-align:left;padding-top:60px;padding-bottom: 5px">Data Pemesan</h1>
  <div class="mx-2">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-file"></i> Tambah Data</button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
   <div class="modal-header">
    <h4 class="modal-title">
      <i class="fas fa-file"></i> Tambah Data</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
        
        <!-- Modal body -->
  <div class="modal-body">
    <form id="formDBU" method="post" action="prosesFormKlien.php">
      <div class="form-group">
        <label>Nama:</label>
          <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Anda" required></input>
      </div>
      <div class="form-group">
        <label>Alamat:</label>
          <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Anda" required></input>
      </div>
      <div class="form-group">
        <label>No Telp:</label>
          <input class="form-control" type="text" name="no_telp" placeholder="Masukkan No Telp Anda" required></input>
      </div>
      <div class="form-group">
            <label>Nama Bus:</label>
            <select class="form-control" name="nama_bus">
              <option value="1">Surabaya</option>
              <option value="2">Mojokerto</option>
              <option value="3">Jember</option>
            </select>
          </div>  
      <div class="form-group">
        <label for="tanggal_pemesanan">Jumlah</label>
          <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Tanggal" required>
      </div>
      <div class="form-group">
        <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
          <input type="text" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" placeholder="Tanggal" required>
      </div>
      <div class="form-group">
        <label>Email:</label>
          <input class="form-control" type="text" name="email" placeholder="Masukkan Email Anda" required></input>
      </div>
    </form>
      </div>
      <div class="modal-footer"><button class="btn btn-primary" form="formDBU">Kirim</button></div>
  </div>
</div>
  </div>
  <!-----end----->

<!----Search----->
<form class="form-inline my-2 my-lg-0 float-xl-right mb-3 mr-1" action="" method="post">
  <input class="form-control mr-sm-2" type="text" name="keywords" placeholder="Masukkan Keywords Pencarian..." size="25" autocomplete="off" autofocus="">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
</form>
<!---end--->
      <br>
      <table class="table mt-3 mb-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telp</th>
            <th scope="col">Nama Bus</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
          </tr>
      </table>
    </div>
  </div>

<div class="modal" id="modal<?php echo $row['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header"><h4>Ubah Data</h4><button class="close fas fa-times" data-dismiss="modal"></button></div>

      <div class="modal-body">
        <form id="formUD<?php echo $row['id'];?>" method="post" >
          <div class="form-group">
            <label>Nama:</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'];?>"></input>
          </div>
          <div class="form-group">
            <label>Alamat:</label>
            <input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat'];?>"></input>
          </div>
          <div class="form-group">
            <label>No Telpon:</label>
            <input class="form-control" type="text" name="no_telp" value="<?php echo $row['no_telp'];?>"></input>
            <input type="hidden" name="id1" value="<?php echo $row['id'];?>">
          </div>
          <div class="form-group">
            <label>Nama Bus</label>
            <input class="form-control" type="text" name="nama_bus" value="<?php echo $row['nama_bus'];?>"></input>
            <input type="hidden" name="id1" value="<?php echo $row['id'];?>">
          </div>
        </form>
      </div>

      <div class="modal-footer"><button class="btn btn-primary" form="formUD<?php echo $row['id'];?>">Kirim</button></div>

    </div>
  </div>
</div>

</body>
</html>