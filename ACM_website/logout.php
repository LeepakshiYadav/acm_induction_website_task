<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--for favicon-->
<link rel="icon" href="im/favicon1.ico">

<head>
  <!--so that it adapts according to device width-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">

  <meta charset="utf-8">
  <title>Speak Up</title>

<style>

.fdiv {
  width: 40%;
  height: auto;
  margin-left: 30%;
  background: rgba(255,255,255,0.6);
}
</style>
</head>


<body style="background-size :cover" background="images/palm.jpg">
<br>
<div class="container pt-5 fdiv">
  <center>
    <img class="mb-4" src="images/logo.png" alt="Speak Up" width="100" height="100">
    <br>
          <label style="font-size: 1.5rem; font-weight:600;" class="mb-4">Logged out successfully</label>
          <br>
          <a href="login.php" class="btn btn-primary mb-5">Login/Signup</a>
  </center>
</div>
  <?php
include('foot.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
