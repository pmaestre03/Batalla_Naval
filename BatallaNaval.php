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

$n=10;
$alpha=range("A","Z");

for ($i=0;$i<=$n;$i++) {
    echo "<tr>\n";
    echo "<td>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++) {
        //echo "<td> x=$x i=$i </td>\n";
        if ($i==0) {
            echo "<td>$x</td>";
        }
        else {
            echo "<td></td>";
        }
    }
    echo "</tr>\n";
}
?>
</table>
