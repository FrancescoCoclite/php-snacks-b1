<?php 

$partite = [
    [
        "squadra1" => "Olimpia Milano",
        "squadra2" => "Cantù",
        "punteggio1" => "55",
        "punteggio2" => "60"
    ],
    [
        "squadra1" => "Virtus Bologna",
        "squadra2" => "Scandone Avellino",
        "punteggio1" => "75",
        "punteggio2" => "100"
    ],
    [
        "squadra1" => " Aquila Trento",
        "squadra2" => "Varese",
        "punteggio1" => "55",
        "punteggio2" => "60"
    ]
];

$lunghezza= count($partite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <?php for($i = 0; $i<$lunghezza; $i++) { ?>
        <div style="margin-bottom:20px">
            <?php echo $partite[$i]['squadra1'] . '-' . $partite[$i]['squadra2'] . '|' . $partite[$i]['punteggio1'] . '-' . $partite[$i]['punteggio2'] ?>
           
        </div>
    <?php } ?>


</body>
</html>