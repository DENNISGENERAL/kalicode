
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>registration form</title>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/metisMenu.min.css" rel="stylesheet">
  <link href="css/timeline.css" rel="stylesheet">
  <link href="css/startminx.css" rel="stylesheet">

  <link href="css/morris.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>

      <div id="wrapper" style="background-color:purple">
        <nav class="navbar navbar-light navbar-fixed-top" style="background-color: green" role="navigation">
     

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="index.php" class="active" style="color:white"><i class="fa fa-home fa-fw"></i> Home</a>
            </li>
     
          </ul>
      </div>
    </nav>



<style type="text/css">
  .form-group{
    margin-bottom:5px;
  }
</style>


<br>

         <center><p><b style="color: #2b802b; font-size: 1vw;">LOGIN FORM  </b></p></center>
   <br>

<form action="loginconn.php" method='post' class="form-horizontal"><br>
<div class="form-group">
    <label class=" col-sm-4 control-label" style="color:; font-size: 1vw;" >username:</label>
  <div class="col-sm-5">
    <input style="font-size: 1vw"  class="form-control input-sm"  type="text" Name="username" placeholder="Enter your username" required="required"/>
  </div></div>

  <div class="form-group">
  <label class=" col-sm-4 control-label" style="color:; font-size: 1vw;">Password:</label>
  <div class="col-sm-5">
    <input style="font-size: 1vw"  class="form-control input-sm"  name='password' type='password' placeholder="Enter Password" required="required" />
  </div>
</div>


         <div class="form-group">
        <div class="col-sm-5 col-sm-push-4">
        <input type="submit" class="btn btn-primary btn-xs" style="color:white;" name="submit" value="Login" id="submit-button" />
          <p style="color:; font-size: 1vw;">New member?<a href="register.php">Create Account </a></p>
   </div>
 </div>

</form>






 <div style="height:255px "></div>
 
 

          </div>

        </div>
      </div>
 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/metisMenu.min.js"></script>
        <script src="js/raphael.min.js"></script>
        <script src="js/morris.min.js"></script>
        <script src="js/morris-data.js"></script>
        <script src="js/startmin.js"></script>
         </body>
      </html>
