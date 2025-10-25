<!DOCTYPE html> 
<html> 
<head> 
<title>PHP Sleep Delay</title> 
</head> 
<body> 
<h2>Delay PHP Execution</h2> 
<form method="post" action=""> 
Enter number of seconds to delay: 
<input type="number" name="seconds" min="1" required> 
<input type="submit" name="submit" value="Delay"> 
</form> 
<?php 
if (isset($_POST['submit'])) { 
$seconds = intval($_POST['seconds']); 
echo "<br>Delaying execution for $seconds seconds...<br>"; 
// Delay execution 
sleep($seconds); 
echo "Resumed after $seconds seconds."; 
} 
?> 
</body> 
</html> 