<?php 
	$title = "Charity Link";
	require("event_path.php");
	// include the header
    require("../../private/shared/header.php");
    require("../../private/initialize.php");

    if(is_post_request()) {

        // Create record using post parameters
        $event = new CharityEvent($_POST);
        $event->organiser_id = $_SESSION['id'];
        $result = $event->save();

        if($result === true) {
            $event = $event->id;
            redirect_to(url_for('event/event.php?id=' . $new_id));
        } else {
            // show errors
        }    
    } else {
        if (isset($_GET['id'])){
            $event = CharityEvent::find_by_id($_GET['id']);
        }
        else{
            $event = new CharityEvent;
        }
    }
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
            <div class="card">
              <div class="card-body">
                <p class="card-title" style="text-align:center; font-weight:bold; font-size: 3rem;"><?php echo ("Create event form") ?></p>
                <div class="row">
                    <div class="col-md">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="charity_name">Charity Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="charity_name" name="name" placeholder="Terry's Charity">
                            </div>
                        </div>
                        
                        <br/>
                    
                        <div class="row">
                            <div class="col-md-4">
                                <label for="description">Description</label>
                            </div>
                            <div class="col-md-8">
                                <textarea id="description" name="description" rows="5" cols="33">Write the description for the event...
                                </textarea>
                            </div>
                        </div>
                        
                        <br/>
                  
                        <div class="row">
                            <div class="col-md-4">
                                <label for="fund_goal">Fund Goal in £</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="fund_goal" name="fund_goal" placeholder="100">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="address">Address</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="address" name="address" placeholder="1 Kingdom St">
                            </div>
                        </div>
                        
                        <br/>
                  
                        <div class="row">
                            <div class="col-md-4">
                                <label for="postcode">Postcode</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="postcode" name="postcode" placeholder="W26BY">
                            </div>
                        </div>
                
                        <br/>
                  
                        <div class="row">
                            <div class="col-md-4">
                                <label for="start_date">Start date</label>
                            </div>
                            <div class="col-md-8">
                                <input type="datetime-local" id="start_date" name="start_date" value="2019-12-01T12:00"
                                        min="2019-01-01T00:00" max="2030-12-31T23:59">
                            </div>
                        </div>
            
                        <br/>
                  
                        <div class="row">
                            <div class="col-md-4">
                                <label for="end_date">End date</label>
                            </div>
                            <div class="col-md-8">
                                <input type="datetime-local" id="end_date" name="end_date" value="2019-12-01T12:00"
                                        min="2019-01-01T00:00" max="2030-12-31T23:59">
                            </div>
                        </div>
                    </div>
                </div>
                
                <br/>

                <div class="row d-flex justify-content-center">
                    <input href="../event.php?id=<?php echo ($event->id)?>" class="btn btn-outline-success" type="submit" value="Submit"> 
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