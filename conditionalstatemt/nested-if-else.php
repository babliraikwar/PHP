<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST['check'])){

        $dbpass=1234;
        $currentpass=$_POST['current'];
        $newpass=$_POST['newpass'];
        $confirmpass=$_POST['confirm'];
        if($dbpass==$currentpass){
            if($currentpass!=$newpass && $currentpass!=$confirmpass){
                if($newpass==$confirmpass){
                    $dbpass=$newpass;

                     echo" your password has been changed".$dbpass;
                }

              else
              {

                 echo "New and Confirm should be same";

                }
            }
            
            else 
            {
                echo" new password and confirm passworm are not equal to the current password";

           }
         }


      else{
       echo" current password is wrong";

      }
    }



    
    ?>
    

<form action="" method="post">
<input type="text" name="current" placeholder=" please enter current password"/><br><br>
<input type="text" name="newpass" placeholder=" please create new password"/><br><br>
<input type="text" name=" confirm" placeholder=" please enter confirm password"/><br><br>
<input type="submit" name="check" value=" change password"/><br><br>

</body>
</html>