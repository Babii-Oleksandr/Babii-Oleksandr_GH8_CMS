<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home15</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?php


$mas = [5, 9, 20, 10, 15, -5, -10, 1,];
    $a = true;
while ($a) {
    $a = false;
    for ($b = 0; $b < count($mas)-1; $b++) {
        if ($mas[$b] > $mas[$b+1]) {
            $c = $mas[$b];
            $mas[$b] = $mas[$b+1];
            $mas[$b+1] = $c;
            $a = true;
        }
    }
}


var_dump($mas);
echo "<br>";
echo "<br>";


$mas = [5, 9, 20, 10, 15, -5, -10, 1, 21];
for ($i = 1; $i < count($mas); $i++) {
    $n = $mas[$i];
    while ($i > 0 && $n < $mas[$i - 1]) {
        $mas[$i] = $mas[$i - 1];
        $i--;
    }
    $mas[$i] = $n;
}
var_dump($mas);

echo '<br>';
echo '<br>';
echo '<br>';

$arr_ay = [5, 9, 20, 10, 15, -5, -10, 1, 21, 25];
sort($arr_ay);
var_dump($arr_ay);

?>


<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
