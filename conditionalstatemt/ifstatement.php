<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
      if(isset($_POST['checkage']))
      {
        $age=$_POST['age'];

        if($age>18){

            echo"you can vote";

        }
        else{
            echo" you can't vot"
        }
      }
    

   ?> 


<form action="" method="post">
    <input type="text" name="age"/>
    <input type="submit" value="Check Age" name="checkage"/>
    </form>
</body>
</html>