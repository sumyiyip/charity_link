<?php
	require("user_path.php");
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
?>

<div class="container">
            <div class="card">
              <div class="card-body">
                <p class="card-title" style="text-align:center; font-weight:bold; font-size: 3rem;"><?php echo ("Sign up") ?></p>
                <div class="row" >
                    <div class="col-md">
                        <dl>
                            <div class="row d-flex justify-content-center">
                                    <div class="col-md-2">
                                        <dt>User Name</dt>
                                    </div>
                                    <div class="col-md-3">
                                        <dd><input type="text" name="user_name" value="<?php echo h($user->user_name); ?>" /></dd>
                                   </div>
                            </div>     
                        </dl>
                        <dl>
                            <div class="row d-flex justify-content-center">
                                    <div class="col-md-2">
                                        <dt>Email Address</dt>
                                    </div>
                                    <div class="col-md-3">
                                        <dd><input type="text" name="email_add" value="<?php echo h($user->email_add); ?>" /></dd>
                                   </div>
                            </div>     
                        </dl>
                        <dl>
                            <div class="row d-flex justify-content-center">
                                    <div class="col-md-2">
                                        <dt>Phone Number</dt>
                                    </div>
                                    <div class="col-md-3">
                                        <dd><input type="text" name="phone_number" value="<?php echo h($user->phone_number); ?>" /></dd>
                                   </div>
                            </div>     
                        </dl>
                        <dl>
                            <div class="row d-flex justify-content-center">
                                    <div class="col-md-2">
                                        <dt>Password</dt>
                                    </div>
                                    <div class="col-md-3">
                                        <dd><input type="password" name="password" value="" /></dd>
                                   </div>
                            </div>     
                        </dl>
                        <dl>
                            <div class="row d-flex justify-content-center">
                                    <div class="col-md-2">
                                        <dt>Confirm Password</dt>
                                    </div>
                                    <div class="col-md-3">
                                        <dd><input type="password" name="confirm_password" value="" /></dd>
                                   </div>
                            </div>     
                        </dl>
                    </div>
                  </div>
                </div>
    </div>
</div>
