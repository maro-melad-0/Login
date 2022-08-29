<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    if ($user == "admin"){
        if ($pass == "password"){
            echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ Done ]</center></h1>";    
        }else{
            echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ pass-error ]</center></h1>";
        }
    }elseif($user == ""){
        echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ user-error ]</center></h1><br>";
        if($pass == ""){
            echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ pass-error ]</center></h1>";
            }
    }elseif($pass == ""){
            echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ pass-error ]</center></h1>";
    }else{
        echo "<h1><center style='color: lightseagreen; font-weight: 900; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;'>[ user-error ]</center></h1>";
    }
    ?>
</body>
</html>