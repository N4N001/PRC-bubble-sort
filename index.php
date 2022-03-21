<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<label for="pole">Napište sem celá čísla oddělená čárkou bez mezer</label>  
<input type="array" name="pole"></input>
<input type="submit" name="submit"></input>
</form>
<?
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}

$arr = $_POST["pole"];
explode(",", $arr);
print("Před seřazením: ");
print_r($arr);

$arr = bubble_sort($arr);

print("Po seřazení: ");
print_r($arr);
?>

</body>
</html>


