<!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Select Format: 
<select name="format">
 <option value="Y-m-d H:i:s">Default</option>
 <option value="d-m-Y">Date Only</option>
 <option value="h:i A">Time Only</option>
 </select>
 <input type="submit" value="Show">
 </form>
 <?php
 if(isset($_POST['format'])){
    $format = $_POST['format'];
    echo "Formatted Date/Time: " . date($format);
 }
 ?>
 </body>
 </html>