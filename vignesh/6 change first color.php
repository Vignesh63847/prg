<html> 
<body> 
<h2>Change the colour of the first character of words available in the given string</h2> 
<br> 
<!-- HTML Form to get input sentence --> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Sentence: 
<input type="text" name="sent" size="100"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
// Check if form is submitted and input is not empty 
if(isset($_POST['submit']) && trim($_POST['sent']) != '') {     
$sentence = $_POST['sent']; // Get user input 
echo "<br>The original sentence is:<br> $sentence"; 
// Apply regex to wrap the first letter of every word with red color using <span> 
$newsentence = preg_replace('/(\b[a-z])/i', '<span style="color:red;">\1</span>', 
$sentence); 
echo "<br>The modified sentence is:<br> $newsentence"; 
} 
// If input is empty 
if(isset($_POST['submit']) && trim($_POST['sent']) == '') { 
echo "<br>No input available"; 
} 
?> 
</body> 
</html>