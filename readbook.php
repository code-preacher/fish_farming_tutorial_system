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
                                   <div class="section"></div>
                                   
                                   <div class="section"></div>
                                   
                                 </div>
                                 <br/>

   
