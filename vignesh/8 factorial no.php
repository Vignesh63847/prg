<html> 
<body> 
<h2>Factorial of the given number</h2> 
<br> 
<!-- HTML Form --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Number: <input type="text" name="numb" size="10"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
if (isset($_POST['submit']) && trim($_POST['numb']) != '') { 
$number = $_POST['numb']; 
echo "<br>The Number is:<br> $number"; 
echo "<br>The Factorial is:<br>"; 
$fact = 1; 
for ($i = 1; $i <= $number; $i++) { 
$fact *= $i; 
} 
echo $fact; 
}  
elseif (isset($_POST['submit']) && trim($_POST['numb']) == '') { 
echo "<br>No input available"; 
} 
?> 
</body> 
</html>