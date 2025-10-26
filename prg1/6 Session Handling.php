 <?php
 session_start();
 if(!isset($_SESSION['count']))
    $_SESSION['count'] = 1;
 else
    $_SESSION['count']++;
 echo "Page viewed ".$_SESSION['count']." times in this session.";
 ?>