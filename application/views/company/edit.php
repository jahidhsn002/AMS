<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('company/edit'); ?>

<input type="hidden" name="uid" value="<?php echo $uid; ?>"/>

<h5>Company Name</h5>
<input type="text" name="name" value="<?php echo $name; ?>"/>

<h5>Contact Person</h5>
<input type="text" name="person" value="<?php echo $person; ?>"/>

<h5>His  Designation</h5>
<input type="text" name="designation" value="<?php echo $designation; ?>"/>

<h5>Email</h5>
<input type="email" name="email" value="<?php echo $email; ?>"/>

<h5>Phone</h5>
<input type="text" name="phone" value="<?php echo $phone; ?>"/>

<h5>Company Address</h5>
<textarea name="address"><?php echo $address; ?></textarea>

<h5>Comment</h5>
<textarea name="comment"><?php echo $comment; ?></textarea>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>