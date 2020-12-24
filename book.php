
<html><body>
<div class="card-panel">
<div id="login" class="col s12">
<form class="col s12" action="vsend.php" method="post" enctype="multipart/form-data">
			<div class="form-container">
        <div class="section"></div>
				<div class="row">
					<div class="input-field col s12">
						<input id="uname" type="text" name="fn"  required/>
						<label for="email">Book name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="uname" type="text" name="fd"  required/>
						<label for="email">Book Description</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						Select book&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="file" name="pix"  required class="btn waves-effect waves-light teal"/> 
						<br/><br/><br/>
						 <button type="submit" name="sub2" class="btn waves-effect waves-light teal">Upload</button>
						 </form>
					</div>
				</div></div></div>  <a href="">&nbsp;</a>
                                  
                                   <div class="section">
								   
								 <div class="card-panel"><p>
<?php
include 'mysql_connect.php';
$result = mysqli_query($conn, "select * from book order by sn desc");
   while($row=mysqli_fetch_assoc($result)){
  $n=$row['sn'];
  $fn = $row['filen'];
  $fd = $row['filen'];
  $f = $row['filep'];
 
?>
                         
                                
                                  Book No:<?php echo "$n";?><br/>
                                     Book Description: <?php echo"$fd"; ?> <br/>
                                   </p>
								    <?php echo"$f"; ?> 
                                   <a href="book/<?php echo"$f"; ?>" >Download</a>
                                  <hr color="gray"><br/>
								  
								 
								                <?php

                             
  }
 ?>
                                 

   

								   
								   </div>
                                   
                                   <div class="section"></div>
                                   
                                 </div>


</div></body></html>