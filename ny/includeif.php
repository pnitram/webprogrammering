<?php

$test = true;

if ($test) {
	include("test1.txt");
} 

if (is_readable("test1.txt")) {
	print("<br><h3>");
	print("test1.txt is a readable file");
	print("</h3>");
}

print("The size of test1.txt is ");
print filesize("test1.txt"); 
print (" bytes");

if ( $test = fopen("temp/test2.txt", "w")) {
	;
	
} 


 /*$dir = './temp';

 // create new directory with 744 permissions if it does not exist yet
 // owner will be the user/group the PHP script is run under
 if ( !file_exists($dir) ) {
  mkdir ($dir, 0744);
 }

 file_put_contents ($dir.'/test.txt', 'Hello File');

*/
?>