<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php   
  if(isset($_POST['check']))
  {
    $amount=$_POST['amount'];

    if($amount>50 && $amount<500){

        echo" you got 5% discount";
    }
    else if($amount>500 && $amount<1000){
        
        echo" you got 10% discount";
    }
   else if($amount>200){

        echo" you got 20% discount";
    }
    else{
    
        echo" sorry<br> you can't get discount ";
   }  


  }

?>
<body>
    <form action="" method="post">
    <input type=" text" name="amount" /> 
    <input type="submit" value="Check Discount" name="check"/>
    </form>
    </body>
</html>