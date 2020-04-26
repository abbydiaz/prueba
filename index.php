<?php
echo "The sum of the first ten numbers is: \n";
$sum = 0;

for ($i = 1; $i <= 10;$i++) {
    $sum+=$i;
    echo $i;
    echo ($i==10) ? "=" : "+";
}
    echo "<strong>$sum</strong><br>";

$array = array ("Manzana","Pera","Banana");
reset($array);
foreach ($array as $fruit){
        echo "Fruta seleccionada: $fruit<br>\n";
    }

$i = 1;
    while($i<=10){
        echo "The number is: " . $i . "<br/>";
        $i++;
    }

    $i=1;
 do {
     $i++;
     echo "el numero es: ".$i."<br>";
 }
 while ($i<10);

?>
