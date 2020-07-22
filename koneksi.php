 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiket";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password ,$dbname);
if (!$koneksi) {
	die("Connection failed");
}?>