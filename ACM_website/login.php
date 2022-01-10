<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--for favicon-->
<link rel="icon" href="images/favicon.ico">

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
      border: dotted 5px red;
      margin-left: 30%;
      background-color: white;
    }

    .f {
      margin-top: 7%;
    }

    .b {
      background-image: url(images/water.jpg);
      background-size: cover;
    }

  </style>
</head>

<body class="b">

  <form class="f" action="logintable.php">
    <div class="py-5 fdiv">
      <center>
        <img class="mb-4" src="images/logo.png" alt="Speak Up" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal font-italic">Please log in</h1>
        <label for="inputEmail" class="font-weight-bold">Email address</label>
        <input type="email" id="inputEmail" class="form-control w-25" placeholder="Email address" name="le" required autofocus><br />
        <label for="inputPassword" class="font-weight-bold">Password</label>
        <input type="password" id="inputPassword" class="form-control w-25" placeholder="Password" name="lp" required>
        <br />
        <button class="btn btn-primary" type="submit" >Login</button><br>
		<a href="sign.php">Not registered yet , please sign in</a>
      </center>
    </div>
  </form>
<?php
include('foot.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
