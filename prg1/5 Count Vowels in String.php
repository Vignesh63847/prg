 <!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Enter a string: <input type="text" name="str">
 <input type="submit" value="Count">
 </form>
 <?php
 if(isset($_POST['str'])){
    $str = strtolower($_POST['str']);
    $vowels = preg_match_all('/[aeiou]/', $str);
    echo "Number of vowels: $vowels";
 }
 ?>
 </body>
 </html>
