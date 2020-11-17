<?php
//q1
$str = "Laith Al Enooz";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO




echo "<br>";
$str = "Laith Al Enooz";
$str = strtolower($str);
echo $str; // Prints mary had a little lamb and she loved it so


echo "<br>";
$str = "Laith Al Enooz";
$foo = ucfirst($foo);  
echo $foo;    


echo "<br>";
$str = "Laith Al Enooz";
$str = ucwords($str);
echo $str; 

echo "<hr>";
// q2
echo "<br>";

$str = "082307";
$arr2 = str_split($str, 2);
echo $arr2[0] .":".  $arr2[1] . ":". $arr2[2] ; 
// // $arr2 =implode("";$arr2 );
// // $arr2 =join(":";$arr2 );
echo "<hr>";

//q3
echo "<br>";
$mystring = 'laith';
$findme   = 'a';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and  position $pos";
}
echo "<hr>";


// q4
echo "<br>";
$var = 5;
$items = (string)$var;
// // $items = strval($var);  
echo gettype($items);


echo "<hr>";

//q5

echo "<br>";
$filepath = 'www.example.com\.index.php';
$filename = basename($filepath);
echo $filename;

echo "<hr>";

echo "<br>";
//q6
laith=" laith@example.com";
$user = strstr($laith, '@', true);
echo $user."\n";

echo "<hr>";

//q7
// echo "<br>";
echo "<br>";
$str1 = "laith@example.com";
echo substr($str1, -3);

echo "<hr>";


//q8
echo "<br>";
$value1 = 65.45;
$value2 = 104.35;
echo sprintf("%1.2f", $value1+$value2);

echo "<hr>";


//q9
// echo "<br>";
echo "<br>";
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7);
  echo "<hr>";

//q10
  echo "<br>";
  echo "<br>";
  $str = 'the quick brown fox jumps over the lazy dog.';
 $str2= str_replace("the", "That", $str);
   echo $str2;
echo "<hr>";

//p11
// echo "<br>";
echo "<br>";
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo "<hr>";


//q12
// echo "<br>";
//  \n =<br>

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);

echo "<hr>";
//q13
// echo "<br>";
echo "<br>";
$path = 'www.example.com/public_html/index.php';
//Show filename, but cut off file extension for ".php" files
$file = basename($path, ".php"); 
echo $file."\n";

echo "<hr>";

//q14
// echo "<br>";
echo "<br>";
$cha = 'b';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha;

echo "<hr>";
//q15
// echo "<br>";
echo "<br>";

$str = "rayy@example.com";
echo ltrim($str,"rayy@");
echo "<hr>";

//q16
// echo "<br>";
echo "<br>";
$str = 'rayy@example.com';
echo bin2hex($str)."\n";

echo "<hr>";

//q18
// echo "<br>";
echo "<br>";
$myvalue = 'the quick brown fox';
$arr = explode(' ',$myvalue);
echo $arr[0]; 
echo "<hr>";
//q19
$str1 = 000547023.24;
$str = ltrim($str1, '0');
echo $str;
echo "<hr>";

 echo "<br>";
//q20
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";

echo "<hr>";


//q21
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo "<hr>";


// //q22
$my_url = 'http://www.example.com/5478631';
echo substr($my_url, strrpos($my_url, '/' )+1)."\n";
echo "<hr>";

//q23
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
echo "<hr>";
//q124
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5));
echo "<hr>";


// //q125

$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x;
  }
echo "<hr>";


//q26
//  for($i="A"; $i<"Z"; $i++){
//      echo $i;
//      echo "<br>";
//  }

 for($i=65; $i<=90; $i++){
    echo chr($i);
}