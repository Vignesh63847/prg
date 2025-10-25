<?php 
// Load XML file using DOM 
$domdoc = new DOMDocument(); 
$domdoc->load("tree.xml"); 
$domdoc->preserveWhiteSpace = false; 
$docroot = $domdoc->documentElement; 
// Using getElementsByTagName() 
$name1 = $domdoc->getElementsByTagName("name")->item(0)->nodeValue; 
echo "Name (using getElementsByTagName): " . $name1 . "<br>"; 
// Using childNodes traversal 
foreach ($docroot->childNodes as $child) { 
if ($child->nodeName == "name") { 
echo "Name (using childNodes traversal): " . $child->nodeValue . "<br>"; 
} 
} 
// Using direct childNodes index 
$name3 = $docroot->childNodes->item(0)->nodeValue; 
echo "Name (using childNodes index): " . $name3 . "<br>"; 
?> 

tree.xml 
<?xml version="1.0" encoding="utf-8"?> 
<students> 
<name>John</name> 
</students>