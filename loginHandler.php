<?php
session_start();
include 'mysql_connect.php';

$valid = true;

  if(isset($_POST['btnLogin'])){
  $user = $_POST["us"];
  $pass = $_POST["pwd"];

  $result1 = mysqli_query($conn,"select * from register where uname= '$user' and password='$pass'");


if(!$result1 || mysqli_num_rows($result1)==0){
  echo "<script>
          alert('Invalid login credentials!');
          window.location.href='login.html';
        </script>";

}else {

    echo "<script>
    alert('Welcome $user!');
        </script>";
		 header("Location: home.php?uname=$user");

  }
}

 ?>
