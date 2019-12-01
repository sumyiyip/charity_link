<?php
	require("user_path.php");
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
?>

<dl>
  <dt>User Name</dt>
  <dd><input type="text" name="user_name" value="<?php echo h($user->user_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email Address</dt>
  <dd><input type="text" name="email_add" value="<?php echo h($user->email_add); ?>" /></dd>
</dl>

<dl>
  <dt>Phone Number</dt>
  <dd><input type="text" name="phone_number" value="<?php echo h($user->phone_number); ?>" /></dd>
</dl>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="password" value="" /></dd>
</dl>
<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="confirm_password" value="" /></dd>
</dl>
