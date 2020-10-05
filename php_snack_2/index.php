<?php 

$name = isset($_GET['name']) ? ($_GET['name']) : 'da inserire';
$email = isset($_GET['email']) ? ($_GET['email']) : 'da inserire';
$age = isset($_GET['age']) ? ($_GET['age']) : 'da inserire';

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
        <?php if (strlen($name) > 3 && strpos($email, "@") && strpos($email, ".") && is_numeric($age) ) {
            echo "Accesso consentito";
        } else {
            echo "ACCESSO NEGATO!!!";
        }
        
        
        ?>
    </p>

</body>

</html>