<?php 
	$title = "Charity Link";
	// include the header
	include ("../private/shared/header.php");

?>

<html>
    <head>
        <title>Charity Link</title>
    </head>
    <body>
        <div>
         <?php include 'nav.php'; ?>
        </div>
        
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Welcome to Charity Link</h1>
            <p class="lead">The Network that Links Charities and the People.</p>
          </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card text-center" style="width: 20rem;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo("event_name") ?></h5>
                        <p class="card-text"><?php echo ("event_decription") ?></p>
                        <a href="<?php echo ("event_url") ?>" class="btn btn-outline-success">Read more</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center" style="width: 20rem;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo("event_name") ?></h5>
                        <p class="card-text"><?php echo ("event_decription") ?></p>
                        <a href="<?php echo ("event_url") ?>" class="btn btn-outline-success">Read more</a>
                      </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card text-center" style="width: 20rem;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo("event_name") ?></h5>
                        <p class="card-text"><?php echo ("event_decription") ?></p>
                        <a href="<?php echo ("event_url") ?>" class="btn btn-outline-success">Read more</a>
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
