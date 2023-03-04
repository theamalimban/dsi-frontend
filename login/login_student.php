<!DOCTYPE html>
<html>
<head>
  <title>Student Sign In Page</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"></link>
  </head>
</head>
<body>
  <!--student sign in-->
  <div class="row">
    <div class="col-md-8">
      <img class="bg" src="../assets/images/pup.jpg">
    </div>
    <div class="col-md-4 flex-column">
      <img class="pup_logo" src="../assets/images/pup logo.png" width="80px" height="80px">
      <h2>Hi, PUPian!</h2>
      <p>Sign in to start your session</p>
     <!-- sign in form-->
     <form action="../student/student_index.php">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="studentNumber">Student Number</span>
              </div>
            <input type="text" class="form-control">
        </div>
        <div class="input-group mb-3">
            <div class="dropdown">
                <input type="date" class="form-control" placeholder="Birth Date">
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="password">Password</span>
              </div>
            <input type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
     </form>
     <!--forgot pass-->
     <a id="forgotPass" href="#">I forgot my password</a>
    </div>
  </div>
</body>