<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mark Simpson</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/marks.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container">
        <div class="masthead">
            <div class="">
                <h1><img class="img-responsive center-block" src="images/logo2_03.png" alt="Mark Simpson"/></h1>
            </div>
        </div>
       <div class="row">
           <?php include "prototype/menu.php"; ?>  
       </div>
        <!-- Content Top -->
        <div class="row">

            <div class="col-lg-12">
                <?php include "prototype/carousel.php"; ?>
            </div>
        </div>
        <!-- Updates -->
        <div class="row">
            <div class="col-lg-6">
                <?php include "prototype/stream.php"; ?>
            </div>
            <div class="col-lg-6">
                <?php include "prototype/news.php"; ?>
            </div>
        </div>
       <!-- Content Summeries -->
        <div class="row">
            <div style="height: 300px;" class="col-lg-4">
                <?php include "prototype/contact.php"; ?>
            </div>
            <div style="height: 300px;" class="col-lg-4">
                <?php include "prototype/random-dev.php"; ?>
            </div>
            <div style="height: 300px;" class="col-lg-4">
                <?php include "prototype/social.php"; ?>
            </div>
        </div>
        <!-- Footer -->
        <div class="row">
            <span>Copyright (c) Mark Simpson 2011</span>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>