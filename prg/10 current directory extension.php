<html> 
<body> 
<h2>Change the Extension of all the text files in a directory</h2> 
<br> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Directory (. for current directory) 
<input type="text" name="dir" size="50"><br><br> 
Enter the new file extension 
<input type="text" name="ext" size="20"><br><br> 
<input type="submit" name="submit" value="Submit Form"><br> 
</form> 
<?php 
if (isset($_POST['submit']) && trim($_POST['dir']) != '') { 
$dirname = $_POST['dir']; 
$newextension = $_POST['ext']; 
$files = scandir($dirname); 
foreach ($files as $file) { 
// Ignore current and parent directory symbols 
if ($file == "." || $file == "..") { 
continue; 
} 
// If directory is not root 
if (trim($dirname) != ".") { 
$newfile = $dirname . "/" . $file; 
} else { 
$newfile = $file; 
} 
echo "<br>"; 
// If the file has .txt extension, change it 
if (pathinfo($newfile, PATHINFO_EXTENSION) == "txt") { 
echo "<br>Old File: " . $newfile; 
// Remove extension 
$file_woext = substr($newfile, 0, strrpos($newfile, ".")); 
// Rename file with new extension 
rename($newfile, $file_woext . "." . $newextension); 
echo "<br>New File: " . $file_woext . "." . $newextension; 
} 
} 
} 
if (isset($_POST['submit']) && trim($_POST['dir']) == '') {                                                                                                                             
echo "<br>Directory name cannot be empty!"; 
} 
?> 
</body> 
</html> 