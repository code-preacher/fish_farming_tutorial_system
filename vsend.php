<?php
include 'mysql_connect.php';
 if(isset($_POST['sub'])) {
$vn= $_POST['fn']; 
$vd= $_POST['fd'];  
 $pix=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
          $folder="video/" ;   
          $date=date("d/m/y \@ g:i A");
          
          move_uploaded_file($temp,$folder.$pix)  ;  
        
mysqli_query($conn,"INSERT INTO video(filen,filed,filep,date) VALUES('$vn','$vd','$pix','$date')");
   echo "<script>
          alert('video uploaded!');
          window.location.href='home_ad.php';
        </script>";
} 
else if(isset($_POST['sub2'])) {
$vn= $_POST['fn']; 
$vd= $_POST['fd'];  
 $pix=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
          $folder="book/" ;   
          $date=date("d/m/y \@ g:i A");
          
          move_uploaded_file($temp,$folder.$pix)  ;  
        
mysqli_query($conn,"INSERT INTO book(filen,filed,filep,date) VALUES('$vn','$vd','$pix','$date')");
  echo "<script>
          alert('book uploaded!');
          window.location.href='home_ad.php';
        </script>";
} 
else if(isset($_POST['sub3'])) {
 
$name= $_POST['check'];         
mysqli_query($conn,"delete from uploads where id='$name'");
 echo "<script>
          alert('video deleted successfully!');
          window.location.href='home_ad.php';
        </script>";
} 
else if(isset($_POST['sub4'])) {
 
$name= $_POST['check2'];         
mysqli_query($conn,"delete from uploads where id='$name'");
 echo "<script>
          alert('book deleted successfully!');
          window.location.href='home_ad.php';
        </script>";
} 
 
?>