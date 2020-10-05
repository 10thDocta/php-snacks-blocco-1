<!-- PHP SNACK 1 -->
<?php

$matches = [

    "gara_1" => [
        "squadra_casa" => "bologna",
        "suadra_casa_punti" => 34,
        "squadra_ospite" => "modena",
        "suadra_ospite_punti" => 32,
    ],


    "gara_2" => [
        "squadra_casa" => "roma",
        "suadra_casa_punti" => 41,
        "squadra_ospite" => "bari",
        "suadra_ospite_punti" => 3,
    ],

    "gara_3" => [
        "squadra_casa" => "sassari",
        "suadra_casa_punti" => 52,
        "squadra_ospite" => "torino",
        "suadra_ospite_punti" => 42,
    ],

    "gara_4" => [
        "squadra_casa" => "milano",
        "suadra_casa_punti" => 34,
        "squadra_ospite" => "firenze",
        "suadra_ospite_punti" => 40,
    ],

    "gara_5" => [
        "squadra_casa" => "brescia",
        "suadra_casa_punti" => 34,
        "squadra_ospite" => "nuoro",
        "suadra_ospite_punti" => 32,
    ],
];

// var_dump($matches);

// var_dump($matches["gara_1"]);

// $lenght = count($matches);

// foreach ($matches as $key => $value) {
//     echo "$key => $value";
// }

foreach ($matches as $key) {
    foreach ($key as $key => $value) {
        echo "["squadra_casa"] = $value";
    }
}

?>