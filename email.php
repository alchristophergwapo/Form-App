<?php
// Fill up array with names
$b[] = "audrey@gmail.com";
$b[] = "anabelle@gmail.com";
$b[] = "christopher@gmail.com";
$b[] = "merry.cris@gmail.com";
$b[] = "ma.teressa@gmail.com";
$b[] = "claire.feliza@gmail.com";
$b[] = "roselyn@gmail.com";

$q=$_GET["email"];
//lookup all hints from array if length of r>0
if (strlen($q) > 0)
{
  $hint="";
  for($i=0; $i<count($b); $i++)
  {
    if (strtolower($q)==strtolower(substr($b[$i],0,strlen($q))))
    {
      if ($hint=="")
      {
      $hint=$b[$i];
      }
      else
      {
      $hint=$hint." , ".$b[$i];
      }
    }
  }
}
//Set output to "no suggestion" if no hint were found
//or to the correct values
if (in_array($q, $b))
{
  $response = "Email already exist.";
}
else
{
  $response=$hint;
}
//output the response
echo $response;

?>


