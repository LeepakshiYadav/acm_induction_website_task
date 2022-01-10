<!DOCTYPE html>
<!--for favicon-->
<link rel="icon" href="images/favicon.ico">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="bootstrap.min.css">
    <title>Speak Up</title>
    <style>
      .sd {
        height: auto;
        border-right: 2px solid blue;
      }

      .big:hover {
        border: 5px solid #7a5c95;
      }
      .ba{
        background-size: cover;
  background-repeat: no-repeat;
  background-position: center 56px;
      }
      .bigp
      {
        font-size: 1.25rem;
        font-weight:600;
      }
    </style>
  </head>

  <body  background="images/namaste.png" class="ba">
   <?php
    include('nav.php');
    ?>
    <div class="container">
        <div class="imagebg"></div>
        <div class="row " style="margin-top: 50px">
            <div class="col-md-6 col-md-offset-3 form-container">
                <br><br><h2><u>Feedback</u></h2>
                <br>
                <p class="bigp"> Please provide your feedback below: </p>
                <form role="form" method="post" action="feedbacktable.php">

                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="comments" class="bigp"> Comments:</label>
                            <textarea class="form-control" type="textarea" name="t2" placeholder="Your Comments" maxlength="6000" rows="7" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="email" class="bigp"> Your Email id:</label>

                            <input type="email" class="form-control" name="t1" value='<?php
                            session_start();
                            $email = $_SESSION['email'];
                            echo($email);
                            ?>' disabled>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                        </div>
                    </div>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </div>

    <?php
    include('foot.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
