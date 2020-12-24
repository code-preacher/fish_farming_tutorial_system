<?php
include 'mysql_connect.php';
if(isset($_GET['sb'])) {
 
$name= $_GET['vk'];         
mysqli_query($conn,"delete from video where sn='$name'");
 echo "<script>
          alert('video deleted successfully!');
          window.location.href='home_ad.php';
        </script>";
} 
if(isset($_GET['sp'])) {
$name= $_GET['bk'];         
mysqli_query($conn,"delete from book where sn='$name'");
 echo "<script>
          alert('book deleted successfully!');
          window.location.href='home_ad.php';
        </script>";
} 
?>