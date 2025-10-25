<html> 
<body> 
<h2>Reversing the contents of the input file</h2> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Filename:  
<input type="text" name="filename" size="10"><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
if (isset($_POST['submit']) && trim($_POST['filename']) != '') { 
$fname = $_POST['filename']; 
// Open input file for reading 
$inputfile = fopen($fname, "r") or die("Unable to open file for reading!"); 
// Open output file for writing 
$newfile = fopen("outputfile.txt", "w") or die("Unable to open file for writing!"); 
// Read contents of input file 
$originaldata = fread($inputfile, filesize($fname)); 
echo "<br>Contents of the source file:<br>" . $originaldata; 
// Reverse contents 
$reverseddata = strrev($originaldata); 
// Write reversed data into new file 
fwrite($newfile, $reverseddata); 
fclose($inputfile); 
fclose($newfile); 
// Display contents of output file 
$newfile = fopen("outputfile.txt", "r") or die("Unable to open new file for reading!"); 
$data = fread($newfile, filesize("outputfile.txt")); 
echo "<br>Contents of the destination file:<br>" . $data; 
fclose($newfile); 
} elseif (isset($_POST['submit']) && trim($_POST['filename']) == '') { 
echo "<br>Filename can not be empty!"; 
} 
?> 
</body> 
</html>