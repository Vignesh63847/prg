 <!DOCTYPE html>
 <html>
 <body>
 <form method="post">
 Enter your name: <input type="text" name="name">
 <input type="submit" value="Greet">
 </form>
 <?php
 if(isset($_POST['name'])){
    $name = $_POST['name'];
    echo "Hello, $name! Welcome to PHP!";
 }
 ?>
 </body>
 </html>