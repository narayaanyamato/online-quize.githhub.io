<?php
 include('header.php'); 
?>

<style type="text/css">
	input[type="text"],input[type="password"],input[type="tel"],input[type="email"],input[type="file"]   {
  background-color:black;
  color: white;
  height: 40px;
  width: 100%;
}

input[type="radio"]
{
	 background-color: orange;
}
</style>

<div class="container mt-5  mb-5bg-light p-4" style="background: url('https://cdn3.vectorstock.com/i/1000x1000/14/02/school-background-with-lots-study-supplies-vector-26311402.jpg');background-repeat: no-repeat;background-size: cover;">
       <h1 class="text-center ">SignUp form </h1>
       <div class="row">
           <div class="col-md-6 mx-auto d-block">
             <form method="post" name="contact" action="#" enctype="multipart/form-data" onsubmit="return validate(); " style="background:rgb(0, 0, 0,0.4); padding: 10px;border:1px solid white;color: white; font-weight: bold;">
                <div class="mb-3">
                 <input type="text" class="form-control" placeholder="Narayan swain" name="name" id="name" required>
                  
                </div>

                <div class="mb-3">
                 
                  <input type="email" class="form-control" placeholder="abc@gmail.com" name="email" id="email" required>
                  
                </div>

                <div class="mb-3">
                  
                  <input type="tel" id="phone" class="form-control" placeholder="7847869140" name="phone" required >
                  
                </div>

                <div class="mb-3">
                  
                  <input type="file" class="form-control" name="file123" id="file123" required>
                  
                </div>


                <div class="mb-3">
                
                  <input type="password" id="phone" placeholder="Enter password" autofocus="off" class="form-control" name="pass"  required>
                  
                </div>
              
                 
                  <div class="mb-3">
                      <div class="card-header bg-dark">
                      	Gender
                      </div>
					 <div class="form-check">
					  <input class="form-check-input" type="radio"   name="Gender" value="male" id="Gender">
					  <label class="form-check-label" for="flexRadioDefault1">
					    Male
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="Gender" value="female" id="Gender">
					  <label class="form-check-label" for="flexRadioDefault2">
					    Female
					  </label>
					</div>

                  </div>
                
                  <div class="d-grid gap-2 col-6 mx-auto mt-3">
                     <button type="submit" name="Submit" class="btn btn-info text-center">Submit</button>
                 </div>

             </form>

             <a class="text-white fs-4 fw-blod fw-italic mt-2" href="login.php">Login</a>
           </div>
       </div>



     </div>


     <?php


if(isset($_POST['Submit']))
{
	include('database.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	$gndr=$_POST['Gender'];

	 
   if(is_uploaded_file($_FILES['file123']['tmp_name']))
   {
	 $fname=$_FILES['file123']['name'];
	
	 if(move_uploaded_file($_FILES["file123"]["tmp_name"],"upload/$fname"))
	 echo "file is moved";
	 else
	 echo "file is not moved";
	}


	$sql="INSERT INTO `user`( `name`, `email`, `phone`, `pass`, `pic`, `gender`) VALUES ('$name','$email','$phone','$pass','$fname','$gndr')";

	if(mysqli_query($mysqli ,$sql))
	{
       echo '<div class="alert alert-success" role="alert">
  Submitted successfully !
</div>';

     ?>

     <script type="text/javascript">
     	window.open('login.php');
     </script>

     <?php
	}
	else
	{
       
       echo '<div class="alert alert-danger" role="alert">
  Some trhing Wrong Try again !
</div>';
	}

	
}



	?>




     <?php
 include('footer.php'); 
?>

