<html> 
<body> 
<h2>Multiplication Table</h2> 
<br> 
<!-- HTML Form --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Number: <input type="text" name="numb" size="10"><br><br> 
Enter the Range: <input type="text" name="rang" size="10"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
// Check if form is submitted and both fields are filled 
if (isset($_POST['submit']) && trim($_POST['numb']) != '' && trim($_POST['rang']) != '') 
{ 
$number = $_POST['numb']; 
$range = $_POST['rang']; 
echo "<br>The Number is:<br> $number"; 
echo "<br>The Range is:<br> $range"; 
echo "<br>The Multiplication table is:<br>"; 
for ($i = 1; $i <= $range; $i++) { 
echo "$number * $i = " . ($number * $i) . "<br>"; 
} 
} elseif (isset($_POST['submit']) && (trim($_POST['numb']) == '' || trim($_POST['rang']) 
== '')) { 
echo "<br>No input available"; 
} 
?> 
</body> 
</html>