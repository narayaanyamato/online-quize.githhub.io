<?php 
 
include('header.php');


?>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
          <div class=" mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
           
          </div>
          <div class="f mb-3">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
       
          </div>
        
          <button class="w-100 btn btn-lg btn-success" name="Submit" type="submit">Log in</button>
          <hr class="my-4">
          <small class="text-muted">By clicking <a href="signup.php"> Sign up</a>, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

  <?php 
 
include('footer.php');


?>

<?php

session_start(); 


if(isset($_POST['Submit']))
{
	include('database.php');


	$email=$_POST['email'];
	$pass=$_POST['pass'];

    $_SESSION['email']=$email=$_POST['email'];
	
	$sql="SELECT * FROM `user` WHERE email='$email' and pass='$pass' ";
	$res=mysqli_query($mysqli ,$sql);


	if(mysqli_num_rows($res)>0)
	{
       

     ?>

     <script type="text/javascript">
     	alert('Login succesfully');
     	window.open('index.php');
     </script>

     <?php
	}
	else
	{
    

     ?>

     <script type="text/javascript">
     	alert('invalid username and password');
     </script>

     <?php
	}

	
}



	?>

