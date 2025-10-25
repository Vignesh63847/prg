Create student table using the below query in the MYSQL prompt: 

create database college; 
use college; 
create table student ( rollno int primary key, name varchar(100) not null, age int, doorno 
varchar(20), street varchar(100), city varchar(50) ); 
insert into student(rollno, name, age, doorno, street, city) values (1, 'rahul sharma', 20, 
'12a', 'mg road', 'delhi'), (2, 'priya verma', 22, '45b', 'park street', 'kolkata'), (3, 'arjun reddy', 
21, '78', 'anna nagar', 'chennai'); 
select * from student;

CODE: 
<?php 
// open the database connection 
$con = mysqli_connect("localhost", "root", "", "college"); 
if (mysqli_connect_errno())  
die("Error connecting db: " . mysqli_connect_error()); 
// select all records from student table 
$domdoc = new DOMDocument(); 
$domdoc->encoding = 'utf-8'; 
$domdoc->xmlVersion = '1.0'; 
$domdoc->formatOutput = true; 
$xmlfilename = 'students2.xml'; 
$root = $domdoc->createElement('students'); 
$result = mysqli_query($con, "SELECT rollno, name, age, doorno, street, city FROM 
student"); 
while ($row = mysqli_fetch_array($result)) { 
echo "<br>" . $row['rollno'] . " : " . $row['name'] . " : " . $row['age'] . " : " .  
$row['doorno'] . " : " . $row['street'] . " : " . $row['city']; 
$student = $domdoc->createElement('student'); 
$root->appendChild($student); 
$rollno = $domdoc->createElement('rollno', $row['rollno']); 
$student->appendChild($rollno); 
$name = $domdoc->createElement('name', $row['name']); 
$student->appendChild($name); 
$age = $domdoc->createElement('age', $row['age']); 
$student->appendChild($age); 
$doorno = $domdoc->createElement('doorno', $row['doorno']); 
$student->appendChild($doorno); 
$street = $domdoc->createElement('street', $row['street']); 
$student->appendChild($street); 
$city = $domdoc->createElement('city', $row['city']); 
$student->appendChild($city); 
} 
$domdoc->appendChild($root); 
$domdoc->save($xmlfilename); 
echo "<br>$xmlfilename has been successfully created"; 
mysqli_close($con); 
?>