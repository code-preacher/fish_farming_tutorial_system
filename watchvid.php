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
