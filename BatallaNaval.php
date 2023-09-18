<h1>Batalla naval</h1>

<style type="text/css">
    table,td {
        border: 1px black solid;
        border-collapse: collapse;
    }
</style>

<table>
<?php

$vaixells = array("fragata" => 4,"submarino" => 3);
$fragata = $vaixells["fragata"];
$submarino = $vaixells["submarino"];

//$posiciones_fregatas = array();
echo "<tr>\n"; 
$n=10;
$alpha=range("A","Z");
echo "<td></td>\n";
for ($i=-1;$i<=$n;$i++) {
    if ($i > 0) {
        echo "<td style='text-align: center'> $i </td>\n";
    }
}
echo "</tr>\n";

for ($i=1;$i<=10;$i++) {
    echo "<tr>\n";
    echo "<td style='text-align: center; width: 25px'>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++){
        $random = rand(0,5);

        if ($random == 0) {
            echo "<td style='width: 50px'></td>\n";
        }
        if ($random == 1) {
            if ($fragata>0) {
                echo "<td style='width: 50px'>F</td>\n";
                //$posiciones_fregatas[] = [$x,$alpha[$i-1]];
                $fragata-=1;
            }
            else {
                echo "<td style='width: 50px'></td>\n";
            }   
        }
        if ($random == 2) {
            if ($submarino>0) {
                echo "<td style='width: 50px'>S</td>\n";
                echo "<td style='width: 50px'>S</td>\n";
                $submarino-=1;
            }
            else {
                echo "<td style='width: 50px'></td>\n";
            }   
        }
        if ($random > 2) {
            echo "<td style='width: 50px'></td>\n";
        }
     
        
    }
    echo "</tr>\n";
}
//var_dump($posiciones_fregatas);
?>
</table>
