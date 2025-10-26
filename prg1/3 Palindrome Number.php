 <!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Enter a number: <input type="text" name="num">
 <input type="submit" value="Check">
 </form>
 <?php
 if(isset($_POST['num'])){
    $num = $_POST['num'];
    if($num == strrev($num))
        echo "$num is a Palindrome.";
    else
        echo "$num is not a Palindrome.";
 }
 ?>
 </body>
 </html>
