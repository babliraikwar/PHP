<?php
$data = array('Ram','ram@gmail.com',3897483784,33);

echo $data[0]."<br>";
$data[0]='babli_jiii';
foreach($data as $c){
    echo $c;
}
?>