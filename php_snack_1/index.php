<!-- PHP SNACK 1 -->
<?php

$matches = [

    "gara_1" => [
        "squadra_casa" => "Bologna",
        "squadra_casa_punti" => 34,
        "squadra_ospite" => "Modena",
        "squadra_ospite_punti" => 32,
    ],


    "gara_2" => [
        "squadra_casa" => "Roma",
        "squadra_casa_punti" => 41,
        "squadra_ospite" => "Bari",
        "squadra_ospite_punti" => 3,
    ],

    "gara_3" => [
        "squadra_casa" => "Sassari",
        "squadra_casa_punti" => 52,
        "squadra_ospite" => "Torino",
        "squadra_ospite_punti" => 42,
    ],

    "gara_4" => [
        "squadra_casa" => "Milano",
        "squadra_casa_punti" => 34,
        "squadra_ospite" => "Firenze",
        "squadra_ospite_punti" => 40,
    ],

    "gara_5" => [
        "squadra_casa" => "Brescia",
        "squadra_casa_punti" => 34,
        "squadra_ospite" => "Nuoro",
        "squadra_ospite_punti" => 32,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($matches as $match) { ?>
        <li><?php echo $match['squadra_casa']; ?> - <?php echo $match['squadra_ospite']; ?> |
            <?php echo $match['squadra_casa_punti']; ?> - <?php echo $match['squadra_ospite_punti']; ?></li>
        <?php } ?>
    </ul>
</body>

</html>