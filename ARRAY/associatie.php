<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dict=array('good'=>"something good",'bad'=>"something not good");
    if(isset($_POST['check']))
    {

        $msg=$_POST['msg'];
        $i=0;
        foreach($dict as $k=>$v)
        {
           if($msg==$k){

            echo $v;
            $i++;
           }
        }
        if($i==0) 
        {
            echo " not found";
        }

    }
    else{
        echo "please enter any word";
    }
    ?>

<form action="" method="post">

<input type="text" name=" msg" />
<input type="submit" name="check" value=" check meaning" />

</form>

</body>
</html>