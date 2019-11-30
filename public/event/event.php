<?php 
	$title = "Charity Link";
	// include the header
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

        <br/>
        
        <div class="container">
            <div class="row d-flex justify-content-center">
                     <img src="images/charity_icon.png" alt="...">
            </div>
            
            <br/>
            
            <div class="row">
                <div class="col-md">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text"><?php echo ("event_name") ?></p>
                        <p class="card-text"><?php echo ("event_organiser") ?></p>
                        <p class="card-text"><?php echo ("event_description") ?></p>
                      </div>
                    </div> 
                </div>
                <div class="col-md">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-text"><?php echo ("event_location") ?></p>
                        <p class="card-text"><?php echo ("event_startdate") ?></p>
                        <p class="card-text"><?php echo ("event_enddate") ?></p>
                        <p class="card-text"><?php echo ("event_current_fund") ?></p>
                        <p class="card-text"><?php echo ("event_goal_fund") ?></p>
                        <div class="row">
                            <div class="col-sm">
                                <a href="<?php echo ("event_join") ?>" class="btn btn-outline-success btn-block">Join</a>
                            </div>
                            <div class="col-sm">
                                <a href="../eventdonate.php?id=<?php echo ("event_donate") ?>" class="btn btn-outline-success btn-block">Donate</a>
                            </div>
                        </div>
                      </div>
                    </div>          
                </div>
            </div>
            
            </br>
        
            <div class="row">
                <div class="col-md">
                    <div class="card text-center">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo("event_participants") ?></h5>
                          
                        </br>
                        
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="images/user.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo("event_participant") ?></h5>
                                    </div>
                                </div>          
                            </div>
                        </div>  
                        
                        </br>
                    
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="images/user.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-9">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo("event_participant") ?></h5>
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
                        <h5 class="card-text"><?php echo("event_donators") ?></h5>
                          
                          </br>
                        
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="images/user.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo("event_participant") ?></h5>
                                    </div>
                                </div>          
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo("donated") ?></h5>
                                    </div>
                                </div>          
                            </div>
                        </div>  
                        
                        </br>
                    
                        <div class="row">
                            <div class="col-md-3">
                                    <img src="images/user.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-title"><?php echo("event_participant") ?></h5>
                                    </div>
                                </div>          
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                  <div class="card-body">
                                    <h5 class="card-text"><?php echo("donated") ?></h5>
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