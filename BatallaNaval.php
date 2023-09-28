<h1>Batalla naval</h1>

<style type="text/css">
    table,td {
        border: 1px black solid;
        border-collapse: collapse;
        text-align: center;
        width: 25px;
    }
</style>

<table>
<?php
$fragata = [];
$submarino = [];
$destructor = [];
$portaviones = [];
$matriu = [];
$partida = [];
$posiciones = false;
$n=10;
$alpha=range("A","Z");
//var_dump($submarino);
for ($i=0;$i<$n;$i++) {
    for ($x=0;$x<$n;$x++) {
        $matriu[$i][$x] = "0";
        $partida[$i][$x] = "0";
    }
}
var_dump($partida);
while ($posiciones==false) {
    for ($i=0;$i<3;$i++) {
        $columna = rand(1,$n-1);
        $fila = rand(1,$n-1);
        
        array_push($submarino,[$alpha[$columna],$fila]);
    }
    $posiciones =true;
}

var_dump($submarino);
for ($i=0;$i<=$n;$i++) {
    echo "<tr>\n";
    echo "<td>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++) {
        if ($i==0) {
            echo "<td>$x</td>";
        }
        else {

            if ($submarino[1][0]==$alpha[$i-1] && $submarino[1][1]==$x) {
                $partida[$i-1][$x] = "S";
                echo "<td style='background-color:grey;'>S</td>";
            }
            else {
                echo "<td style='background-color:blue;'></td>";
            }
        }
    }
    echo "</tr>\n";
}
//var_dump($partida[10-1]);
?>
</table>