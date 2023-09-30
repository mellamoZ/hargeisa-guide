<?php
session_start();
include("loginheader.php");
include("dbconnection.php");



if(isset($_SESSION['userid']))

{
  print_r('looooooool');
	echo "<script>window.location='dashboard.php';</script>";
}

if(isset($_POST['submit']))

{	
	$sql = "SELECT * FROM user WHERE email='$_POST[email]' AND password='$_POST[password]'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION['userid']= $rslogin['userid'] ;
		echo "<script>window.location='dashboard.php';</script>";
	}
	else
	{
		$err = "<div class='alert alert-danger'>
		<strong>Oh !</strong> Change a few things up and try submitting again.
	</div>";
	}
}


?>

    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="images/undraw_survey_05s5.svg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="mb-4">
                  <h3>Sign In</h3>
                  <p class="mb-4">Don't have an account? <span> <a href="./register.php" > Join us!</a></span></p>
                  <p class="mb-4">Forgot password? <span> <a href="./forgot.php" > click here!</a></span></p>

                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <input placeholder="Email" type="email" name = "email" class="form-control" id="username">
    
                  </div>
                  <div class="form-group last mb-4">
                    <input placeholder="Password" type="password" name = 'password' class="form-control" id="password">
                  </div>
                  
                
    <button type="submit" class="btn btn-block" name="submit" style="background-color: #FF8057; color:#fff;">Login</button>

                </form>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
</body>
</html>
