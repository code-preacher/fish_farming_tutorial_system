<?php
session_start();
include 'mysql_connect.php';
$user=$_GET['uname'];
$result = mysqli_query($conn, "select * from register where uname='$user' ");

if(!$result||mysqli_num_rows($result)==0){
  echo "Error";
}
else if(mysqli_num_rows($result)==1){
  $row = mysqli_fetch_assoc($result);
  $idn = $row['id'];
  $fn = $row['fname'];
  $un = $row['uname'];
  $picPath = $row['pix'];
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
     <title>Home</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
     <link rel="stylesheet" type="text/css" href="css/materialize.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     <link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />

     <style media="screen">
       .title{
         height:120px;
         width:100%;
         background-color: teal;
         /*color:white;*/
         margin:0;
         padding:0;
       }
       h4{
         color:white;
       }
       .container
       {
       	margin-top: 40px;
       	width: 700px;
       }
     </style>
   </head>
   <body>


     <div class="row">

       <div class="col s12 m3 l3">
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul id="slide-out" class="side-nav fixed">
           <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img src="img/<?php echo $picPath?>" width="150px" height="300px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo $un ?><i class="material-icons right">more</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo $un ?><i class="material-icons right">close</i></span>
                <h6><label>ID:</label><br> <?php echo $idn ?></h6>
                <h6><label>Full name:</label><br> <?php echo $fn ?></h6>
                
                          
				 <a href="login.html" style="color:teal;text-align:center;">Logout</a>
              </div>
            </div>
                  </ul>
         <ul class="side-nav" id="mobile-demo">
           <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img src="img/<?php echo $picPath?>" width="150px" height="300px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><?php echo $_SESSION["userID"] ?><i class="material-icons right">more</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?php echo $un ?><i class="material-icons right">close</i></span>
                    <h6><label>ID:</label><br> <?php echo $idn ?></h6>
                <h6><label>Full name:</label><br> <?php echo $fn ?></h6>
               
				 <a href="login.html" style="color:teal;text-align:center;">Logout</a>
              </div>
            </div>
           
         </ul>
       </div>

<!-- start central column -->
<div class="title">
       <div class="col s12 m12 l6">
<div class="section"></div>
         <h4>Home</h4>
<div class="section"></div>

<!-- start tab-->
<div class="container white z-depth-2" id="test12">

  <ul class="tabs teal homeTab">
    <li class="tab col s3"><a class="white-text active orange" href="#watchvid">Videos</a></li>
          <li class="tab col s3"><a class="white-text active orange" href="#readbook">Book</a></li> 
    <li class="tab col s3"><a class="white-text orange" href="#feedback">Feed back</a></li>
  
      </ul>


  <div id="watchvid" class="col s12">
    <?php include 'watchvid.php'; ?>
  </div>

  <div id="readbook" class="col s12">
    <?php include 'readbook.php'; ?>
  </div>

  <div id="feedback" class="col s12">
    <?php include 'feedback.php'; ?>
  </div>

</div>
<!-- end tab -->


</div>

</div>
<!-- end central column -->

       <div class="col s12 m6 l3">
       </div>

</div>

     <script src="js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
      <script src="js/application.js" type="text/javascript" charset="utf-8"></script>

      <script type="text/javascript" src="js/jquery.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
       <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
       <script type="text/javascript" src="js/materialize.min.js"></script>
       <script type="text/javascript" src="js/myScript.js"></script>
        <script src="js/facebox.js" type="text/javascript"></script>

       <script type="text/javascript">
              jQuery(document).ready(function($) {
                //$("#aa").click({
                  $('a[rel*=facebox]').facebox({
                    loadingImage : 'images/loading.gif',
                    closeImage   : 'images/closelabel.png'
                  });

              //  });

              });
      </script>

      <script>
      function autoRefresh_div()
      {
      $("#requested").load("requested.php");// a function which will load data from other file after x seconds
      $("#pending").load("pending.php");
      $("#approved").load("approved.php");
      $("#declined").load("declined.php");
      }

      setInterval('autoRefresh_div()', 5000); // refresh div after 5 secs

      $(document).ready(function(){

       function load_unseen_notification(view = '')
       {
        $.ajax({
         url:"notiApp.php",
         method:"POST",
         data:{view:view},
         dataType:"json",
         success:function(data)
         {
          //  console.log(data);

          if(data > 0)
          {
           $('.countA').html(data + " new");
          }
         }
        });
       }

       load_unseen_notification();


       $(document).on('click', '.approved', function(){
        $('.countA').html('');
        load_unseen_notification('yes');
       });

       setInterval(function(){
        load_unseen_notification();
       }, 5000);

      });


      $(document).ready(function(){
       function load_unseen_notificationD(view = '')
       {
        $.ajax({
         url:"notiDec.php",
         method:"POST",
         data:{view:view},
         dataType:"json",
         success:function(data)
         {
           console.log(data);
          if(data > 0)
          {
           $('.countD').html(data + " new");
          }
         }
        });
       }

       load_unseen_notificationD();

       $(document).on('click', '.declined', function(){
        $('.countD').html('');
        load_unseen_notificationD('yes');
       });

       setInterval(function(){
        load_unseen_notificationD();

       }, 5000);

      });
      </script>
   </body>
 </html>
