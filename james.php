<?php
$conn = new mysqli("localhost", "root", "", "tropy");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['sub'])){
	$n=$_POST['us'];
		$p=$_POST['pass'];
mysqli_query($conn,"insert into login(user,passkey) values('$n','$p')");
}


?>
<form action="" method="post">
NAME:<br/><input type="text" name="us">
<br/>
PASSWORD:<input type="password" name="pass"><br/>
<input type="submit" name="sub" value="send">
</form>