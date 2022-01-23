<?php
//memulai session
session_start();
//cek session
if (!isset($_SESSION['login']))
{
   header('location:./index.php');
}
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Home Remember Me</title>
   </head>
   <body>
      <center> <h1>HALAMAN LOGIN</h1>
	  <br><br>
	  <center> <h2>Nama:Kamda Delly Sunggara</h2>
	  <center> <h2>NIM:202552019253298</h2>
	  <center> <h2>Mata Kuliah : SISTEM APLIKASI WEB</h2>

      <center><p><a href="./logout.php">Logout</a></p>
   </body>
</html>