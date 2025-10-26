 <?php
 $filename = "sample.txt";
 $content = file_get_contents($filename);
 $words = str_word_count($content);
 $chars = strlen($content);
 echo "Words: $words<br>Characters: $chars";
 ?>
