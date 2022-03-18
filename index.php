<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
 <input type="text" name="pole">
 <input type="submit">
</form>

<?php
function bubbleSort (array $arr) {

    $n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) { 
        for ($j = $n - 1; $j <= $i; $j--) { 
            if ($arr[$j - 1] > $arr[$j]) {
            $pom = $arr[$j - 1];
            $arr[$j - 1] = $arr[$j];
            $arr[$j] = $pom;
            }
        }
    }
    return $arr;
}

$formPole = filter_input(INPUT_POST, 'pole');
var_dump($formPole);
$pok = bubbleSort($data);
$pole = explode(",", $formPole);

$pocetCisel = count($pole);
for ($i=0; $i < $pocetCisel ; $i++) { 
    echo $pole[$i] . "," ;
}

?>
</body>
</html> 