Create student table using the below query in the MYSQL prompt: 
mysql> CREATE database student; 
mysql> use student; 
mysql>create table studenttbl (rollno INT,  
stdname varchar(50),  
semester INT,  
mark1 INT,  
mark2 INT,  
mark3 INT,  
mark4 INT,  
mark5 INT,PRIMARY KEY(rollno,semester)); 

stdmain.php: 
<html> 
<body> 
<center><h2>Student Management System</h2></center> 
<form name="std" method="post" action="stdprocess.php"> 
<table border="0" align="center"> 
<tr> 
<td>Rollno: </td><td><input type="text" name="stdid"></td> 
</tr> 
<tr> 
<td>Studentname: </td><td><input type="text" name="stdname"></td> 
</tr> 
<tr> 
<td>Semester: </td><td><input type="text" name="sem" size="10"></td> 
</tr> 
<tr> 
<td>Mark1: </td><td><input type="text" name="mark1" size="10"></td> 
</tr> 
<tr> 
<td>Mark2: </td><td><input type="text" name="mark2" size="10"></td> 
</tr> 
<tr> 
<td>Mark3: </td><td><input type="text" name="mark3" size="10"></td> 
</tr> 
<tr> 
<td>Mark4: </td><td><input type="text" name="mark4" size="10"></td> 
</tr> 
<tr> 
<td>Mark5: </td><td><input type="text" name="mark5" size="10"></td> 
</tr> 
</table> 
<br><br> 
<center> 
<input type="submit" name="Insert" value="insert"> 
<input type="submit" name="Delete" value="delete"> 
<input type="submit" name="Update" value="update"> 
<input type="submit" name="View" value="View Results"> 
</center> 
</form> 
</body> 
</html> 

Stdprocess.php: 
<html> 
<body> 
<?php 
$con = mysqli_connect("localhost", "root", "", "student"); 
if (mysqli_connect_errno()) 
echo "<br>Error connecting db: " . mysqli_connect_error(); 
else { 
if (isset($_POST['Insert'])) { 
$sql = "INSERT INTO studenttbl(rollno, stdname, semester, mark1, mark2, mark3, 
mark4, mark5) 
VALUES ('" . $_POST['stdid'] . "','" . $_POST['stdname'] . "','" . $_POST['sem'] . 
"','" . $_POST['mark1'] . "','" . $_POST['mark2'] . "','" . $_POST['mark3'] . "','" . 
$_POST['mark4'] . "','" . $_POST['mark5'] . "')"; 
$result = mysqli_query($con, $sql); 
if ($result) 
echo "<br>Record inserted successfully"; 
else 
echo "<br>Record not inserted successfully: " . mysqli_error($con); 
}  
elseif (isset($_POST['Delete'])) { 
if ($_POST['stdid'] != "" && $_POST['sem'] != "") { 
$sql = "DELETE FROM studenttbl WHERE rollno='" . $_POST['stdid'] . "' AND 
semester='" . $_POST['sem'] . "'"; 
$result = mysqli_query($con, $sql); 
if ($result) 
echo "<br>Record deleted successfully"; 
else 
echo "<br>Record not deleted successfully: " . mysqli_error($con); 
} else { 
echo '<script>alert("Roll Number and Semester number are needed to delete the 
record!")</script>'; 
} 
    }  
     
    elseif (isset($_POST['Update'])) { 
        if ($_POST['stdid'] != "" && $_POST['sem'] != "") { 
            $sql = "UPDATE studenttbl  
                    SET stdname='" . $_POST['stdname'] . "', 
                        mark1='" . $_POST['mark1'] . "', 
                        mark2='" . $_POST['mark2'] . "', 
                        mark3='" . $_POST['mark3'] . "', 
                        mark4='" . $_POST['mark4'] . "', 
                        mark5='" . $_POST['mark5'] . "' 
                    WHERE rollno='" . $_POST['stdid'] . "' AND semester='" . $_POST['sem'] . 
"'"; 
            $result = mysqli_query($con, $sql); 
 
            if ($result) 
                echo "<br>Record updated successfully"; 
            else 
                echo "<br>Record not updated successfully: " . mysqli_error($con); 
        } else { 
            echo '<script>alert("Roll Number and Semester number are needed to update the 
record!")</script>'; 
        } 
    }  
     
    elseif (isset($_POST['View'])) { 
        if ($_POST['stdid'] == "") 
            $sql = "SELECT * FROM studenttbl ORDER BY semester, rollno"; 
        else 
            $sql = "SELECT * FROM studenttbl WHERE rollno='" . $_POST['stdid'] . "' 
ORDER BY semester"; 
 
        $result = mysqli_query($con, $sql); 
 
        if (!$result) { 
            die("Query failed: " . mysqli_error($con)); 
        } 
 
        echo "<table border=1> 
              <tr> 
                <th>Roll Number</th><th>Name</th><th>Semester</th> 
                <th>Mark1</th><th>Mark2</th><th>Mark3</th> 
                <th>Mark4</th><th>Mark5</th><th>Total</th><th>Result</th> 
              </tr>"; 
 
        while ($row = mysqli_fetch_array($result)) { 
            echo "<tr>"; 
            echo "<td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td> 
                  <td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td> 
                  <td>" . $row[6] . "</td><td>" . $row[7] . "</td>"; 
$total = $row[3] + $row[4] + $row[5] + $row[6] + $row[7]; 
echo "<td>" . $total . "</td>"; 
if ($row[3] > 34 && $row[4] > 34 && $row[5] > 34 && $row[6] > 34 && 
$row[7] > 34) { 
$res = "Pass"; 
} else { 
$res = "Fail"; 
} 
echo "<td>" . $res . "</td>"; 
echo "</tr>"; 
} 
echo "</table>"; 
} 
} 
echo "<br>"; 
?> 
<a href="stdmain.php">Main Page</a> 
</body> 
</html>