<?php


 $info=array('hello','we','he','u');
 $data="today is holiday";

 echo $data."<br>";
 echo "length of string =".strlen($data)."<br>";
 echo "upper case of string =".strtoupper($data)."<br>";

 echo "lower case of string =".strtolower($data)."<br>";
 echo "reverse of string =".strrev($data)."<br>";
 echo "replace of string =".str_replace("holiday","monday",$data)."<br>";
 echo "position of string =".strpos($data,"h")."<br>";
 echo "trim= ".trim($data,"t")."<br/>";
 print_r($info)."<br>";
 echo implode(" ",$info)."<br>";
 echo md5("is");


?>