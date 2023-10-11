<?php

include 'Piece.php';
include 'Square.php';

$letters = range('a', 'h');
foreach ($letters as $letter) {
    for ($i = 1; $i < 9; $i++) {
        return '$' . $letter . $i;
    }
}



$black_pawn = new Piece('p');
$white_queen = new Piece('Q');

echo $black_pawn;
echo $white_queen;

// for($i='a'; $i<'i'; $i++){
//     for($j=1; $j<9; $j++){

//     }
// }

$a2 = new Square(1, 2);
$b2 = new Square(2, 2, $white_queen);
$c2 = new Square(3, 2, $black_pawn);
$d2 = new Square(4, 2);
echo $a2;
echo $b2;
echo $c2;
echo $d2;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
    <style>
        body {
            background-color: lightgrey;
        }

        .dark {
            background-color: black;
        }

        .square {
            height: 30px;
            width: 30px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .light {
            background-color: lightcyan;
        }
    </style>
</head>

<body>


</body>

</html>