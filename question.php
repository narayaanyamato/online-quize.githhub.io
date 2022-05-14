<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
  

 ?>

<?php include('header.php') ;

   if(isset($_SESSION['email']))
   {

   
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>

    
      
      <div class="container mt-5 mb-5 ">
        <div class="current bg-danger text-white fs-5"><marquee scroll="alternate"> Question <?php echo $number; ?> of <?php echo $total; ?> | Carefully Select ! | ^_^/0_0 | All The Best! </marquee></div>

        <?php 

          include('database.php');
              $email=$_SESSION['email'];
           $sql="SELECT * FROM `user` WHERE email='$email'";
           $res=mysqli_query($mysqli,$sql);
              if(mysqli_num_rows($res)>0)
              	 $row=mysqli_fetch_assoc($res);
            
        ?>

           <div class="row">

           	<div class="col-lg-4 mb-3">
           		<div class="card" >
							  <img src="upload/<?php echo $row['pic']; ?>" class="card-img-top"  alt="<?php echo $row['name'] ?>">
							  <div class="card-body">
							    <h5 class="card-title text-info text-center"><?php echo $row['name']; ?></h5>
							  </div>
							  <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Email:<?php echo $row['email'] ;?></li>
							    <li class="list-group-item">Phone:<?php echo $row['phone'] ;?></li>
							    <li class="list-group-item">Gender:<?php echo $row['gender']; ?></li>
							    
							  </ul>
							
							</div>
           		
           	</div>
           	<div class="col-lg-8 col-12 mx-auto ">
           		<div class="card mb-5 " style="height: 350px; width: 100%;">
					    <p class="question card-header bg-success fw-3 fs-5 p-3 text-white">
					   <?php echo $question['question'] ?>
				    	</p>
				    	<form method="post" class="mt-3"  action="process.php" >
					      <ul class="choices">
					        <?php while($row=$choices->fetch_assoc()): ?>
						<li><input name="choice"  type="radio"  value="<?php echo $row['id']; ?>" />
						        <span class="text-info p-2  fw-bold"><?php echo $row['choice']; ?></span>
						</li>
						<?php endwhile; ?>
					      </ul>
					        <div  class="m-4 mb-2">
					        	 <input type="submit" value="submit" class="btn btn-success mt-2 ml-3" />
					        </div>
					      <input type="hidden" name="number" value="<?php echo $number; ?>" />
					</form>
				</div>
           	</div>
           	
           </div>
      </div>

    


    
<?php
  include('footer.php');
 }
 else
 {
 	 header("Location:login.php");
 }


 ?>
  </body>
</html>