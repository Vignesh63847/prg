<?php 
// Load XML file 
$xml = simplexml_load_file("email.xml") or die("Unable to load XML file"); 
// Print employee count 
echo "There are " . count($xml->employee) . " employees working in this 
company.<br><br>"; 
echo "Employee ID and their E-Mail addresses are:<br>"; 
// Loop through employees 
foreach ($xml->employee as $emp) { 
echo $emp->empid . " - " . $emp->email . "<br>"; 
} 
?>
 
email.xml
<?xml version="1.0" encoding="utf-8"?> 
<company> 
<employee> 
<department>Production</department> 
<empname>Raman</empname> 
<empid>1000</empid> 
<email>raman@gmail.com</email> 
</employee> 
<employee> 
<department>Sales</department> 
<empname>Sunil</empname> 
<empid>1003</empid> 
<email>sunil@gmail.com</email> 
</employee> 
<employee> 
<department>Quality Control</department> 
<empname>Rani</empname> 
<empid>1011</empid> 
<email>rani@gmail.com</email> 
</employee> 
</company>