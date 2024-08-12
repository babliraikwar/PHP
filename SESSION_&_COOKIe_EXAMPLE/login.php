<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['login'])){

  $username=$_POST['uname'];
  $password=$_POST['upass'];
  if($username=='admin' && $password='1234'){
    session_start();
    $_SESSION['user']=$username;
    echo " <script> window.location.href='dashboard.php';</script>";
  }
  else{
    echo " wrong username or password";
  }
}
else{
    echo" please enter your username  or password:";
}


?>

    
<form action="" method="post">

<table>
        <tr>
            <td> username</td>
            <td><input type="text" name="uname"/></td>
        </tr> 
        <tr>
            <td> password</td>
            <td><input type="password" name="upass"/></td>
        </tr>
        <tr>
            <td> </td>
            <td><input type="submit" name="login"/></td>
        </tr>
</table>

</form?
</body>
</html>