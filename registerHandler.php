<?php
session_start();
include 'mysql_connect.php';
if(isset($_POST['btnRegister'])){
              $fn = $_POST['fme'];
    $un = $_POST['ume'];
    $pass= $_POST['pwd'];
		 $pix=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
		  $folder="img/" ;  
  move_uploaded_file($temp,$folder.$pix)  ; 
 mysqli_query($conn, "INSERT INTO register (fname,uname,password,pix) VALUES ('$fn','$un','$pass','$pix')");
    echo "<script>
              alert('SUCCESSFULLY REGISTERED!');
              window.location.href='login.html';
           </script>";
}
mysqli_close();
 ?>
