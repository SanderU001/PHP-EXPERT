<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $provincies = [
            [
                    'provincie' => 'Overijssel',
                    'hoofdstad' => 'Zwolle',
                    'bevolking'  => 'geen kanker idee',
                    'inwoners_gemeente' => 'Boeit me niet'
                ],
                [
                    'provincie' => 'Drenthe',
                    'hoofdstad' => 'Assen',
                    'bevolking'  => 'Stomdronken',
                    'inwoners_gemeente' => 'Is niet te beschrijven ivm incest'
                ],
                [
                    'provincie' => 'Noord-Holland',
                    'hoofdstad' => 'Haarlem',
                    'bevolking'  => 'Een heleboel',
                    'inwoners_gemeente' => 'Zoek het zelf uit'
                ],
                [
                    'provincie' => 'Brabant',
                    'hoofdstad' => 'Den Bosch',
                    'bevolking'  => 'Incest',
                    'inwoners_gemeente' => 'Te veel'
                ]
                ,
                [
                    'provincie' => 'Gelderland',
                    'hoofdstad' => 'Arnhem',
                    'bevolking'  => 'Koeien',
                    'inwoners_gemeente' => 'Evenveel wat op een weiland past'
                ]
        ];
        
        foreach($provincies as $provincie ){
            echo '<h2>' . $provincie['provincie']. '</h2>';
            echo '<ul>';
            echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
            echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
            echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
            echo '</ul>';
        
        }
    ?>
</body>
</html>