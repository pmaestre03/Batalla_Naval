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
$submarino = [[['J',10],['J',9]]];
$matriu = [];
$partida = [];
$n=10;
$alpha=range("A","Z");
//var_dump($submarino);
for ($i=0;$i<$n;$i++) {
    for ($x=0;$x<$n;$x++) {
        $matriu[$i][$x] = "0";
        $partida[$i][$x] = "0";
    }
}

//var_dump($matriu);

for ($i=0;$i<=$n;$i++) {
    echo "<tr>\n";
    echo "<td>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++) {
        if ($i==0) {
            echo "<td>$x</td>";
        }
        else {
            if ($submarino[0][0]==$alpha[$i-1] && $submarino[0][1]==$x) {
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
var_dump($partida[10-1]);
?>
</table>
