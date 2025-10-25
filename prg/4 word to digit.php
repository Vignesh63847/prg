<!DOCTYPE html> 
<html> 
<head> 
<title>Words to Digits</title> 
</head> 
<body> 
<h2>Words to Digits</h2> 
<br> 
<!-- HTML Form --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the words separated by space: 
<input type="text" name="words" size="100"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
// Check if form is submitted and input is not empty 
if (isset($_POST['submit']) && trim($_POST['words']) != '') { 
$wds = $_POST['words']; 
echo "<br>Input words: " . $wds; 
// Convert the string to lowercase and explode into array 
$wdlower = strtolower($wds); 
$wdsarray = explode(" ", $wdlower); 
$digits = ''; 
// Convert each word to a digit 
foreach ($wdsarray as $word) { 
echo "<br>" . $word; 
switch (trim($word)) { 
case 'zero':  $digits .= '0'; break; 
case 'one':   $digits .= '1'; break; 
case 'two':   $digits .= '2'; break; 
case 'three': $digits .= '3'; break; 
case 'four':  $digits .= '4'; break; 
case 'five':  $digits .= '5'; break; 
case 'six':   $digits .= '6'; break; 
case 'seven': $digits .= '7'; break; 
case 'eight': $digits .= '8'; break; 
case 'nine':  $digits .= '9'; break; 
default:      $digits .= '?'; break; // For invalid words 
} 
} 
echo "<br><br><strong>The output number is: </strong>" . $digits; 
} elseif (isset($_POST['submit']) && trim($_POST['words']) == '') { 
echo "<br>No inputs available"; 
} 
?> 
</body> 
</html>