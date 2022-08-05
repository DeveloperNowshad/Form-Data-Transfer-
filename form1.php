<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name" id="">
          <input type="submit" value="Submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]== "POST"){
       $name = htmlspecialchars($_REQUEST["name"]);
       if(empty($name)){
        echo "form is empty";
       } else{
         echo $name;
       }
    }
    ?>

    
</body>
</html>