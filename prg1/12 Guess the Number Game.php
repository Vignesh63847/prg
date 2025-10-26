<!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Guess a number (1-10): <input type="number" name="guess">
 <input type="submit" value="Submit">
 </form>
 <?php
 $random = 5; // Example
 if(isset($_POST['guess'])){
    $guess = $_POST['guess'];
    if($guess == $random)
        echo "Correct Guess!";
    elseif($guess > $random)
        echo "Too High!";
    else
        echo "Too Low!";
 }
 ?>
 </body>
 </html>
