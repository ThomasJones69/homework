<html>
<img src = "calc.jpg">
</html>
<?php
echo "<br>";
echo "Geef twee waardes op en wat je met de getallen wil laten doen";
echo "<br>";
echo "Geeft <b>\"getal1\"</b> en <b>\"getal2\"</b> op samen met <b>\"operator\"</b> als functie.";
echo "<br>";

$getalurl1 = $_GET['getal1'];
$getalurl2 = $_GET['getal2'];
$operator = $_GET['operator'];
$som = 0;
switch($operator){  
    case  "plus":
        optellen($getalurl1,$getalurl2);
        break;
    case  "min":
        aftrekken($getalurl1,$getalurl2);
        break;
    case  "maal":
        vermenigvuligen($getalurl1,$getalurl2);
        break;
    case  "delen":
        delen($getalurl1,$getalurl2);
        break;
    Default:
        echo "Je hebt <b>geen</b> geldige waarde(s) opgegeven";
    }
// optellen
function optellen($getal1,$getal2){
        $som = $getal1 + $getal2;
                echo"<br>";
                echo "De uitkomst van jouw keuze voor optellen is:";
                echo "<br>";
                echo $getal1."+".$getal2."=".$som."<br>";
                
}
// aftrekken
function aftrekken($getal1,$getal2){
        $som = $getal1 - $getal2;
                echo"<br>";
                echo "De uitkomst van jouw keuze voor aftrekken is:";
                echo "<br>";
                echo $getal1."-".$getal2."=".$som."<br>";
                
}
// delen
function delen($getal1,$getal2){
        $som = $getal1 / $getal2;
                echo"<br>";
                echo "De uitkomst van jouw keuze voor delen is:";
                echo "<br>";
                echo $getal1.":".$getal2."=".$som."<br>";
                
}
// vermenigvuldigen
function vermenigvuligen($getal1,$getal2){
        $som = $getal1 * $getal2;
                echo"<br>";
                echo "De uitkomst van jouw keuze voor vermenigvuldigen is:";
                echo "<br>";
                echo $getal1."*".$getal2."=".$som."<br>";
                
}

        
?>