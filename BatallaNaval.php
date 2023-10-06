<h1>Batalla naval</h1>

<style type="text/css">
    table,td {
        border: 1px black solid;
        border-collapse: collapse;
        text-align: center;
        width: 25px;
        background-color:blue;
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

for ($i=0;$i<$n;$i++) {
    for ($x=0;$x<$n;$x++) {
        $matriu[$i][$x] = "0";
        $partida[$i][$x] = "0";
    }
}
while ($posiciones==false) {
    for ($i=0;$i<4;) {
        $columna = rand(1,$n-1);
        $fila = rand(1,$n-1);
        if ($matriu[$fila][$columna] == 0) {
            array_push($fragata,[$alpha[$columna],$fila]);
            $matriu[$fila][$columna] = 1;
            $i++;
        }
    }
    for ($i=0;$i<3;) {
        $columna = rand(1,$n-1);
        $fila = rand(1,$n-1);
        $orientado = rand(0,3);
        for ($j=0;$j=1;) 
        if ($matriu[$fila][$columna] == 0) {
            array_push($submarino,[$alpha[$columna],$fila]);
            $matriu[$fila][$columna] = 2;
            $i++;
        }
    }
    for ($i=0;$i<2;) {
        $columna = rand(1,$n-1);
        $fila = rand(1,$n-1);
        if ($matriu[$fila][$columna] == 0) {
            array_push($destructor,[$alpha[$columna],$fila]);
            $matriu[$fila][$columna] = 3;
            $i++;
        }
    }
    for ($i=0;$i<1;) {
        $columna = rand(1,$n-1);
        $fila = rand(1,$n-1);
        if ($matriu[$fila][$columna] == 0) {
            array_push($portaviones,[$alpha[$columna],$fila]);
            $matriu[$fila][$columna] = 4;
            $i++;
        }
    }
    $posiciones = true;
}

for ($i=0;$i<=$n;$i++) {
    echo "<tr>\n";
    echo "<td style='background-color:white;'>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++) {
        if ($i==0) {
            echo "<td style='background-color:white;'>$x</td>";
        }
        else {
            for ($j=0;$j<3;$j++) {
                if ($submarino[$j][0]==$alpha[$i-1] && $submarino[$j][1]==$x) {
                    $partida[$i-1][$x] = "S";
                    echo "<td style='background-color:grey;'>S</td>";
                }
            }
            for ($j=0;$j<4;$j++) {
                if ($fragata[$j][0]==$alpha[$i-1] && $fragata[$j][1]==$x) {
                    $partida[$i-1][$x] = "F";
                    echo "<td style='background-color:grey;'>F</td>";
                } 
            }
            for ($j=0;$j<2;$j++) {
                if ($destructor[$j][0]==$alpha[$i-1] && $destructor[$j][1]==$x) {
                    $partida[$i-1][$x] = "D";
                    echo "<td style='background-color:grey;'>D</td>";
                } 
            }
            for ($j=0;$j<1;$j++) {
                if ($portaviones[$j][0]==$alpha[$i-1] && $portaviones[$j][1]==$x) {
                    $partida[$i-1][$x] = "P";
                    echo "<td style='background-color:grey;'>P</td>";
                } 
            }
            
        }
    }
    echo "</tr>\n";
}
?>
</table>
