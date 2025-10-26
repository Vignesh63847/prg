 <?php
 $conn = mysqli_connect("localhost","root","","feedbackdb");
 if(!$conn) die("Connection failed!");
 $result = mysqli_query($conn, "SELECT * FROM feedback");
 echo "<h3>Feedback Reports</h3>";
 echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Feedback</th></tr>";
 while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['feedback']}</td></tr>";
 }
 echo "</table>";
 ?>

