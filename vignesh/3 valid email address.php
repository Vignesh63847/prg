<!DOCTYPE html> 
<html> 
<body> 
<h2>E-mail id validation</h2> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the E-Mail id to validate: 
<input type="text" name="email"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
if (isset($_POST['submit']) && trim($_POST['email']) != '') { 
$mailid = $_POST['email']; 
// Validation using regular expression 
if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", 
$mailid)) { 
echo "<br>$mailid is an invalid E-Mail id (Validation using regular expression)"; 
} else { 
echo "<br>$mailid is a valid E-Mail id (Validation using regular expression)"; 
} 
// Validation using filter_var 
if (filter_var($mailid, FILTER_VALIDATE_EMAIL)) { 
echo "<br>$mailid is a valid E-Mail address (Validation using filter_var)"; 
} else { 
echo "<br>$mailid is an invalid E-Mail address (Validation using filter_var)"; 
} 
} 
?> 
</body> 
</html>