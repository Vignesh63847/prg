<?php 
$rows = 4; 
$cols = 4; 
$arr = array( 
array(1, 2, 3, 4), 
array(5, 6, 7, 8), 
array(9, 10, 11, 12), 
array(13, 14, 15, 16) 
); 
// Display the original array 
echo "Original Table:<br>"; 
print_r($arr); 
// Create HTML table and column headers 
echo "<br><table border='1'>"; 
echo"<tr><th></th><th>Col1</th><th>Col2</th><th>Col3</th><th>Col4</th><th>Rows
 um</th></tr>"; 
echo "<br>"; 
echo "Table with sums of rows and sums of columns:<br>"; 
// Row-wise display and row sum calculation 
for ($i = 0; $i < $rows; $i++) { 
echo "<tr><td>row " . ($i + 1) . "</td>"; 
$rowsum = 0; 
for ($j = 0; $j < $cols; $j++) { 
echo "<td>" . $arr[$i][$j] . "</td>"; 
$rowsum += $arr[$i][$j]; 
} 
echo "<td><b>" . $rowsum . "</b></td></tr>"; 
} 
// Column sum calculation 
echo "<tr><td><b>Colsum</b></td>"; 
for ($j = 0; $j < $cols; $j++) { 
$colsum = 0; 
for ($i = 0; $i < $rows; $i++) { 
$colsum += $arr[$i][$j]; 
} 
echo "<td><b>" . $colsum . "</b></td>"; 
} 
echo "</tr></table>"; 
?>