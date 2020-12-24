<?php
include 'mysql_connect.php';

 if(isset($_POST['sub'])) {
    $name ="ADMIN";
$chat= $_POST['chat']; 
  $date=date("d/m/y \@ g:i A");   
        
mysqli_query($conn,"INSERT INTO chat(chat,name,date) VALUES('$chat','$name','$date')");

}  
?>
                         
                                 <div class="card-panel">					
		 
														 <div id="login" class="col s12">
		<form class="col s12" action="#" method="post">
			<div class="form-container">
        <div class="section"></div>
							<div class="row">
					<div class="input-field col s12">
						<input id="password" type="text" name="chat"  required />
						<label for="password">Reply</label><br/>
						 <button type="submit" name="sub" class="btn waves-effect waves-light teal">Send</button>
						 </form>
					</div>
				</div></div></div>
                                   <a href="">&nbsp;</a>
                                  
                                   <div class="section"></div>
                                   
                                   <div class="section"></div>
                                   
                                 </div><br>
								 
								 <div class="card-panel">
								 <?php
								  include("mysql_connect.php"); 

 
    
 
  $seat=mysqli_query($conn,"SELECT  * FROM chat order by id desc");
 while($row3=mysqli_fetch_assoc($seat)){
 $chat=$row3['chat'];    
  $name=$row3['name'];
 $date=$row3['date'];
   
    
   
           echo"<div style='width:auto; height:auto ;  box-shadow:2px 10px 23px #888888;  background-color: #fff ; margin:auto; word-wrap:break-word;'>";
   
   
          echo"<table>       
        <td>  $chat</td></tr></table>";
        echo"<hr color='gray'>";
          echo"<div style='float:right; font-size:12px;'>$name &nbsp;&nbsp; $date</div>";
               
     echo"</div><br/><br/><br/>"; 
 }


								 ?>

								 </div>
                                 <br/>

    