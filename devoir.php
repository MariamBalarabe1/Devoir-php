<?php


function etoile(int $x):void
{
    $j=1;
    $i=1;
    while($i<=$x){
        while($j<=$i){
            echo("* ");
            $j=$j+1;
        }
        $j=1;
        echo("<br>");
        $i=$i+1;
    }

}
etoile(5);

echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");


function etoil(int $x):void
{
    
    $i=1;
    $j=1;
    $k=1;
    while($i<=$x){
        while($k<=($x-$i)){
            echo("&nbsp ");
            $k=$k+1;
        }
        $k=1;
        while($j<=((2*$i)-1)){
            echo("*");
            $j=$j+1;
        }
        $j=1;
        echo("<br>");
        $i=$i+1; 
    }

}
etoil(10);

   
?>
