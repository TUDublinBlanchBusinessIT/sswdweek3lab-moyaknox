<?php
echo "<TABLE border ='1'>";
for ($i=1;$i<=20;$i++) {

    //echo "<TR><TD>1</TD><TD>2</TD>";
    for ($j=1;$j<=10;$j++) {
        echo "<TD>Row $i, Col $j</TD";
    }
    echo "<TR/>";
}
echo "</TABLE>";
?>

