 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
//	$query="select * from shouts order by time desc limit 100";
	//$shouts = mysqli_query($con,$query);
  include('header.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    

     <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom text-info">Result of Quizes</h2>
  </div>

	<div class="container-xl">
	     <h2 class="text-success ">You are Done!</h2>
	     <p class="text-success fs-4 fw-blod">Congrats! You have completed the test</p>
	      <div class="bg-success text-white p-2 rounded-3 ">
           <p class="text-white fs-3 fw-blod fw-italic">Final socre: <?php echo $_SESSION['score']; ?></p>
        </div>
	     
       <div class="px-4 py-5 my-5 text-center">
  
      <div class="d-grid gap-2 d-sm-flex ">
       <a href="logout.php"> <button type="button" class="btn btn-danger btn-lg ">Log out</button>
      </a>
    
      </div>

      <img class=" img-fluid mt-3 img-thumbnail" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/00dd2767-592f-4b31-9364-4acc27062f4f/da2a5d4-7aa3b1f1-8639-46c5-988f-a0c476a381ef.gif?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMDBkZDI3NjctNTkyZi00YjMxLTkzNjQtNGFjYzI3MDYyZjRmXC9kYTJhNWQ0LTdhYTNiMWYxLTg2MzktNDZjNS05ODhmLWEwYzQ3NmEzODFlZi5naWYifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.yUb_vhv31ZGqoBLbwxvLTuS4JU6o2q4Bpsx_DF_oGfo" width="100%" height="300px">
    </div>
  </div>
	     <?php session_destroy(); ?>
	</div>
      


    
  </body>
</html>

<?php 
include('footer.php');
?>