 <?php include "database.php"; ?>

<?php
  //Get the total questions
  $query="select * from questions";
  //Get Results
  $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
  $total = $results->num_rows;
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
    


      
  <div class="px-4 py-5  text-center rounded-5" style="background-image: url('https://www.moulton.ac.uk/assets/images/Generic/_hero/iStock-1192359331.jpg');">
    <img class="d-block mx-auto mb-4 rounded-5" src="https://www.aakash.ac.in/blog/wp-content/uploads/2022/04/cropped-exam-16-640x815.jpg" alt="" width="172" height="157">
    <h1 class="display-5 fw-bold text-white">Test your PHP Knowledge</h1>
    <div class="col-lg-6 mx-auto">
      
  <p class="text-white fs-3">This is a multiple choice quize to test your knowledge about something</p>
  <ul class="text-danger fw-4">
    <li class="text-white" ><strong class="text-danger fw-4">Number of Questions: </strong><?php echo $total; ?></ul>
    <li class="text-white "><strong class="text-danger fw-4">Type: </strong>Multiple Choice</ul>
    <li class="text-white "><strong class="text-danger fw-4">Estimatd Time: </strong><?php echo $total*0.5; ?> minutes</ul>
  </ul>
  
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
        <a href="question.php?n=1"><button type="button" class="btn btn-success mt-2 btn-lg px-4 gap-3"> Start Test</button></a>
        
      </div>
    </div>
  </div>

<?php include('footer.php') ?>
  </body>
</html>