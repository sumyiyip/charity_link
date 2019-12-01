<?php 
	$title = "Charity Link";
	// include the header
	require("user_path.php");
	require("../../private/shared/header.php");
?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../nav.css">

        <title>Charity Link</title>
    </head>
    <body>
        <div>
         <?php include '../nav.php'; ?>
        </div>
        
        <div class="jumbotron jumbotron-fluid" style="background-color: #c0e3e5;">
          <div class="container">
            <h1 class="display-4">Profile</h1>
            <p class="lead">Welcome back, <?php echo $_SESSION['username']; ?></p>
          </div>
        </div>
        
        <div class="container">
            <br/>
            <div class="row">
                <div class="col-md">
                    <a href="../event/events.php?id=<?php echo ("event_join") ?>" class="btn btn-outline-success btn-block">Join event</a>
                </div>
                <div class="col-md">
                    <a href="../event/eventform.php?id=<?php echo ("event_create") ?>" class="btn btn-outline-success btn-block">Create event</a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md">
                    <div class="card text-center">
                          <div class="card-body">
                            <h5 class="card-text" style="text-align:center; font-weight:bold; text-decoration: underline; font-size: 2rem;">Events participated in</h5>
                              <br/>
                                <div class="row">
                                    <div class="col-md-4">
                                            <img src="images/charity_icon.png" class="card-img" alt="...">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card text-center">
                                          <div class="card-body">
                                            <h5 class="card-title"><?php echo("event_name") ?></h5>
                                            <p class="card-text"><?php echo ("event_decription") ?></p>
                                            <a href="../event.php?id=<?php echo ("event_id") ?>" class="btn btn-outline-success">Read more</a>
                                          </div>   
                                        </div>          
                                    </div>  
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card text-center">
                          <div class="card-body">
                            <h5 class="card-text" style="text-align:center; font-weight:bold; text-decoration: underline; font-size: 2rem;">Events created</h5>
                              <br/>
                                <div class="row">
                                    <div class="col-md-4">
                                            <img src="images/charity_icon.png" class="card-img" alt="...">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card text-center">
                                          <div class="card-body">
                                            <h5 class="card-title"><?php echo("event_name") ?></h5>
                                            <p class="card-text"><?php echo ("event_decription") ?></p>
                                            <a href="../event.php?id=<?php echo ("event_id") ?>" class="btn btn-outline-success">Read more</a>
                                          </div>   
                                        </div>          
                                    </div>  
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

<?php
	require("../shared/footer.php");
?>