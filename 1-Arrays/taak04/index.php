<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $speelgoed = [

        [
            'naam' => 'bal',
            'soort' => 'sport',
            'prijs' => '5.00'
        ],
        [
            'naam' => 'knuffelbeer',
            'soort' => 'knuffels',
            'prijs' => '9.50'
        ],
        [
            'naam' => 'Catan',
            'soort' => 'bordspel',
            'prijs' => '39.00'
        ],
    ];

    $games = [
        'sport' => [
            'naam' => 'Fifa',
            'uitgever' => 'EA',
            'prijs' => '60.00'
        ],
        'action' => [
            'naam' => 'Doom',
            'uitgever' => 'Bethesda',
            'prijs' => '60.00'
        ],
        'fps' => [
            'naam' => 'Left for dead 2',
            'uitgever' => 'Valve',
            'prijs' => '40.00'
        ]
    ];
        echo $speelgoed[0]['naam'] . " " . $speelgoed[0]['soort'] . " " . $speelgoed[0]['prijs'] . "</br>";
        echo $speelgoed[1]['naam'] . " " . $speelgoed[1]['soort'] . " " . $speelgoed[1]['prijs'] . "</br>";
        echo $speelgoed[2]['naam'] . " " . $speelgoed[2]['soort'] . " " . $speelgoed[2]['prijs'] . "</br>";
            echo "</br>";
        echo $games['sport']['naam'] . " " . $games['sport']['uitgever'] . " " . $games['sport']['prijs'] . "</br>";
        echo $games['action']['naam'] . " " . $games['action']['uitgever'] . " " . $games['action']['prijs'] . "</br>";
        echo $games['fps']['naam'] . " " . $games['fps']['uitgever'] . " " . $games['fps']['prijs'] . "</br>";
    ?>
</body>
</html>