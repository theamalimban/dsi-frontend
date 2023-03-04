<!DOCTYPE html>
<html>
<head>
  <title>Student's Main Page</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"></link>
  </head>
</head>
<body style="overflow-x: hidden;">
  <!--student dashboard-->
  <div class="row">
    <div class="col-3 px-2">
      <?php 
          include "../sidebars/sidebar_student.php";
        ?>
    </div>
    <div class="col-9 px-0" style="background-color: #F5F5F5">
      <div class="header">
        <?php 
          include "../header.php";
        ?>
      </div>
      <div class="container allContent-section">
        <?php
          include "../student/dashboard.php";
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../assets/js/ajaxWork.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js">
  <script src="https://code.jquery.com/jquery-4.0.0.min.js" ></script>

</body>
</html>
