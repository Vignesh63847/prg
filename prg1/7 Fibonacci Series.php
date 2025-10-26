 <!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Enter number of terms: <input type="number" name="n">
 <input type="submit" value="Generate">
 </form>
 <?php
 if(isset($_POST['n'])){
    $n = $_POST['n'];
    $a = 0; $b = 1;
    echo "Fibonacci Series: ";
    for($i=0;$i<$n;$i++){
        echo $a." ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
 }
 ?>
 </body>
 </html>
