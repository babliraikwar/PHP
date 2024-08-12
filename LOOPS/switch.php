<?php
   
   if(isset($_POST['check']))
   {

    $theme=$_POST['theme'];

    switch($theme)
    {
        case 'nature':
            $bg="green";
            $text="white";
            break;

        case 'desert':
                $bg="pink";
                $text="white";
                break;



         case 'rainy':
                    $bg="yellow";
                    $text="white";
                    break;

        default:
        $bg=" skyblue";
        $text="white";
        break;

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
        {
            background: <?php echo $bg; ?>;
            color:<?php echo $text; ?>;
        }
        </style>

</head>
<body>
    


<form action="" method="post">
   <select name="theme">
   <option value="select theme"> select theme</option>
   <option value="nature"> nature</option>
   <option value="desert"> desert</option>
   <option value="rainy"> rainy</option>

   </select>
   <input type="submit" name="check" value=" change theme"/>
</form>
<h2>heading here</h2>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste placeat enim alias sapiente consequuntur quibusdam quod doloremque. Officiis id consequatur, minima obcaecati, tempora nam similique nulla incidunt quas voluptatum porro?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos voluptas provident amet cum perspiciatis, ipsam illum tempora quo ducimus sed asperiores tenetur repudiandae ullam voluptatem at numquam iusto. Ducimus, cupiditate.

</p>
</body>
</html>