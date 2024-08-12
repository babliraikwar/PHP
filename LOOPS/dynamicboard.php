<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            color:white;
            font-size:30px;
            text-align:center;
        }
        </style>
</head>
<body>
    
<?php
$row=5;
$col=5;
$t=0;
?>

<table width="400px" height="400px" border="1" align="center">
    <?php
    for($i=1; $i<=$row;$i++)
    {
    ?>
    <tr>
        <?php
         for($j=$t+1; $j<=$col+$t; $j++)
        
        {
        ?>
        <td <?php
        if($j%2==0)
        {
            echo "bgcolor='skyblue'";
        }
        else 
        {
            echo "bgcolor='pink'";

        }
        ?>><?php echo $j;?> </td>
        <?php
        }
        ?>
    </tr>
    <?php 

    $t=$j-1;

    }

    ?>
        
</table>


</body>
</html>