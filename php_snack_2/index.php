<?php 

$name = isset($_GET['name']) ? ($_GET['name']) : 'empty';
$email = isset($_GET['email']) ? ($_GET['email']) : 'empty';
$age = isset($_GET['age']) ? ($_GET['age']) : 'empty';

// var_dump(strlen($name));

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p>
        <?php if ((strlen($name) > 3 && $name != "empty") && (strpos($email, "@") && strpos($email, ".")) && (is_numeric($age) && intval($age) > 0) ) {
            echo "Accesso consentito";
        } elseif ($name == "empty" || $email == "empty" || $age == "empty" ) {
            echo "Mancano i parametri di ingresso";
        } else {
            echo "ACCESSO NEGATO!!!";
        }
        
        
        ?>
    </p>

</body>

</html>