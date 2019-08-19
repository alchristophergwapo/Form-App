<?php
// Fill up array with names
$b[] = "audrey";
$b[] = "anabelle";
$b[] = "christopher";
$b[] = "merry cris";
$b[] = "ma. teressa";
$b[] = "claire feliza";
$b[] = "roselyn";
$r=$_GET["username"];
//lookup all hints from array if length of r>0
if (strlen($r) > 0)
{
  $hint="";
  for($i=0; $i<count($b); $i++)
  {
    if (strtolower($r)==strtolower(substr($b[$i],0,strlen($r))))
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
if (in_array($r, $b))
{
  $response = "Username already exist.";
}
else
{
  $response=$hint;
}
//output the response
echo $response;

?>


