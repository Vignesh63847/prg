<!DOCTYPE html> 
<html> 
<head> 
<title>List Files by Modification Time</title> 
</head> 
<body> 
<h2>List the files in the given directory based on the Modification time</h2> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
Enter the Directory (. for current directory)  
<input type="text" name="dir" size="50"><br><br> 
<input type="submit" name="submit" value="Submit Form"> 
</form> 
<?php 
if (isset($_POST['submit']) && trim($_POST['dir']) != '') { 
$dirname = $_POST['dir']; 
if ($dirname == ".") { 
$dirpath = "*"; 
} else { 
$dirpath = $dirname . "/*"; 
} 
$filesarray = array(); 
// glob() gives list of files/folders 
foreach (glob($dirpath) as $filename) { 
if (is_file($filename)) { 
$filesarray[filemtime($filename)] = basename($filename); 
} 
} 
echo "<br><b>Original Files:</b><br>"; 
foreach ($filesarray as $modificationtime => $file) { 
echo "Modification Time = " . $modificationtime . ", Filename = " . $file . "<br>"; 
} 
// sort by modification time (ascending) 
ksort($filesarray); 
echo "<br><b>Sorted Files:</b><br>"; 
foreach ($filesarray as $modificationtime => $file) { 
echo "Modification Time = " . $modificationtime . ", Filename = " . $file . "<br>"; 
} 
} elseif (isset($_POST['submit']) && trim($_POST['dir']) == '') { 
echo "<br>Directory name cannot be empty!"; 
} 
?> 
</body> 
</html>