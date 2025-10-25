<html> 
<body> 
<center><h2>PHP program to display the sum of first n prime numbers</h2></center> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the number of prime numbers:  
<input type="text" name="num"><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
if (isset($_POST['submit'])) { 
$n = $_POST['num']; 
$i = 3; 
$count = 0; 
$c = 0; 
$sum = 0; 
if ($n > 1) { 
echo "The Prime numbers are:<br>2"; 
$sum = $sum + 2; 
for ($count = 2; $count <= $n; $i++) { 
for ($c = 2; $c < $i; $c++) { 
if ($i % $c == 0) 
break; 
} 
if ($c == $i) { 
echo "<br>$i"; 
$sum = $sum + $i; 
$count++; 
} 
} 
echo "<br><br>The sum of first $n Prime numbers is : $sum"; 
} else { 
echo "<br>Given number is less than or equal to 1"; 
} 
} 
?> 
</body> 
</html>