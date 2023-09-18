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
$submarino = [['J',10],['J',9]];
$n=10;
$alpha=range("A","Z");
var_dump(count($submarino));
for ($i=0;$i<=$n;$i++) {
    echo "<tr>\n";
    echo "<td>".$alpha[$i-1]."</td>\n";
    for ($x=1;$x<=$n;$x++) {
        //echo "<td> x=$x i=$i </td>\n";
        if ($i==0) {
            echo "<td>$x</td>";
        }
        else {
            if ($submarino[0][0]==$alpha[$i-1] && $submarino[0][1]==$x) {
                echo "<td>S</td>";
            }
            else {
                echo "<td style='background-color:blue;'></td>";
            }
        }
    }
    echo "</tr>\n";
}
?>
</table>
