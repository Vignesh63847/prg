 <?php
 setcookie("user", "John Doe", time()+3600);
 if(isset($_COOKIE['user']))
    echo "Cookie Value: ".$_COOKIE['user'];
 else
    echo "Cookie not set!";
 ?>
