<div class="card-panel" style="height:500px;">
<div id="login" class="col s12">
<form class="col s12" action="vsend.php" method="post" enctype="multipart/form-data">
			<div class="form-container">
        <div class="section"></div>
		<div class="row">
					<div class="input-field col s12">
						<input id="uname" type="text" name="fn"  required/>
						<label for="email">Video name</label>
					</div>
				</div>
		<div class="row">
					<div class="input-field col s12">
						<input id="uname" type="text" name="fd"  required/>
						<label for="email">Video Description</label>
					</div>
				</div>
			<div class="row">
					<div class="input-field col s12">
						Select video&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="file" name="pix"  required class="btn waves-effect waves-light teal"/> 
						<br/><br/><br/>
						 <button type="submit" name="sub" class="btn waves-effect waves-light teal">Upload</button>
						 </form>
					</div>	
			
</div><a href="">&nbsp;</a>
			
		</div></div></div><br/>
		
		<div class="card-panel"><p>
<?php
include 'mysql_connect.php';
$result = mysqli_query($conn, "select * from video order by sn desc");
 while($row=mysqli_fetch_assoc($result)){
  $n=$row['sn'];
  $fn = $row['filen'];
  $fd = $row['filen'];
  $f = $row['filep'];
?>
                         
                                
                                  Video No:<?php echo "$n";?><br/>
                                     Video Description: <?php echo"$fd"; ?> <br/>
                                   
								   <video controls height="500" width="100%"><source src="video/<?php echo"$f"; ?>"></video>
								   <br/>
                                   <a href="video/<?php echo"$f"; ?>" >Download</a>
                                  <hr color="gray"><br/>
								
									                <?php

                             
  }
 ?>						  
                                   <div class="section"></div>
                                   
                                   <div class="section"></div>
                                   
                                 </div>
                                 <br/>
