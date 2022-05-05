<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?
$str = $_POST["pole"];
if (isset($str)) {

    $arr = explode(",", $str);
print "Před bubble sortem: ";
$pocet = count($arr);

for ($e = 0; $e < $pocet; $e++) {
print_r($arr[$e]);
}

print "</br>";
print "Po bubble sortu: ";

for ($i = -1; $i < $pocet - 1; $i++) { 
    $p=$i+1;
    $boomar[$i+1] = $arr[$p];
};
$bpocet = count($boomar);
for ($d=0; $d < 256; $d++) { 
    
for ($a=0; $a < $bpocet-1; $a++) { 
    if ($boomar[$a] > $boomar[$a+1]) {
        $moveright = $boomar[$a];
        $boomar[$a] = $boomar[$a+1];
        $boomar[$a+1] = $moveright;
    }
}
}

for ($c=0; $c < $bpocet; $c++) { 
    print_r($boomar[$c]);
}
}
else {?>
    <form method="POST">
    <label for="pole">Napište sem celá čísla oddělená čárkou bez mezer</label>  
    <input type="array" name="pole"></input>
    <input type="submit" name="submit"></input>
    </form>
</body>
</html>
<?

}?>
