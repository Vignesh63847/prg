<!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Enter a number: <input type="number" name="num">
 <input type="submit" value="Check">
 </form>
 <?php
 if(isset($_POST['num'])){
    $num = $_POST['num'];
    $sum = 0; $temp = $num;
    while($temp != 0){
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }
    if($sum == $num)
        echo "$num is an Armstrong number.";
    else
        echo "$num is not an Armstrong number.";
 }
 ?>
 </body>
 </html>
