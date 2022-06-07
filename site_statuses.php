<?php 
// To use just change `$site` variable (line 28) and second param of `strpos` function (line 30) of each site you want to test.
//
// OUTPUTS SOMETHING LIKE THIS ON VISITING PAGE
//
// starting...
// passed..
// passed..
// passed..
// passed..
// passed..
// passed..
// passed..
// passed..
// passed..
//
// 100%
// done


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'starting...';
$errors = 0;
   
$site = "https://SITE-1.COM/PAGE55.HTML";
$content = file_get_contents($site);
if (strpos(strval($content), 'ANY STRING THAT SHOULD BE PRESENT ON PAGE') !== false) {
   echo "<br><span style='color:green;'>passed..</span>";
} else {
   echo "<br>failed";
   $errors++;
}
    
//$site = "https://site-2.com/";
//$content = file_get_contents($site);
//if (strpos(strval($content), 'value of button name') !== false) {
//  echo "<br><span style='color:green;'>passed..</span>";
//} else {
//   echo "<br>failed";
//   $errors++;
//}
       
echo '<br>';

if ($errors == 0) {
 echo "<br><span style='color:green;'>100%</span>";
}

echo '<br>done';
    
?>
