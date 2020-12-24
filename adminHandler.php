<?php
include 'mysql_connect.php';

  if(isset($_POST['login_btn'])){
  $user = $_POST['ue'];
  $pass = $_POST['pd'];

  $result1 = mysqli_query($conn,"select * from admin where username= '$user' and password='$pass'");


if(!$result1 || mysqli_num_rows($result1)==0){
  echo "<script>
          alert('Invalid login credentials!');
          window.location.href='login.html';
        </script>";

}else {

    echo "<script>
    alert('Welcome $user!');
        </script>";
		 header("Location: home_ad.php?username=$user");

  }
}

 ?>
