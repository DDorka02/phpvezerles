<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php vezérlési szerkezet</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>PHP vezérlési szerkezetek</h1>
    <?php
    echo "<h2>Véletelenszámok</h2>";
    echo (rand() . "<br>");
    echo "A véletlen szám maximuma: <br>" . getrandmax() . "<br>";
    echo (rand(10, 13) . "<br>");
    echo "<h2>Hatókör</h2>";
    $x = 7;
    $y = 6;
    $k;
    function myTest0()
    {
        //nem működik:
        //$y = $x + $y;
        // működik:
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo $GLOBALS['z'];
    }
    myTest0();
    echo "<h2>Asszicotiv tömb</h2>";
    $nevKor = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    print_r($nevKor);
    echo "<br>";
    $nevKor["Peter"] = 36;
    echo "Péter életkora:" . $nevKor['Peter'];

    echo "<h2>Operátorok</h2>";
    $adat1 = floor(8 / 3);
    echo $adat1 . "<br>";
    echo "A $adat1 adattípusa: " . gettype($adat1);
    ;
    echo "<h2>Elágazás - switch</h2>";
    $jegy = 4;
    switch ($jegy) {
        case 1:
            echo "elégtelen";
            break;
        case 2:
            echo "elégséges";
            break;
        case 3:
            echo "közepes";
            break; 
        case 4:
            echo "jó";
            break;
        default:
            echo "jeles";
            break;
    }
    echo "<h2>Ciklusok-asszioatív</h2>";
    foreach ($nevKor as $kulcs => $ertek) {
        echo " $kulcs: $ertek <br>";
    }

    $veletlenek = array();
    $osszeg=0;
    for ($index = 0; $index < 5; $index++) {
        $veletlenek[$index] = rand(20,30);
        $osszeg+= $veletlenek[$index];
    }
    print_r($veletlenek);
    echo "A számok összege: $osszeg.<br>";

   

    echo "<h2>Sakk tábla</h2>";

    echo "<table>";
    echo "<tr>";
    echo "<td></td>";
    for ($i = 97; $i < 105; $i++){
        echo "<td>" .chr($i). "</td>";        

    }
     echo "</tr>";
    for ($i =8; $i < 0; $i--){
        echo "<tr>";
        echo "<td>$i</td>";
        if ($i %2 ==0){
            for ($j = 0; $j < 4; $j++){
                echo "<td class='feher'></td>";
                echo"<td class='szurke'></td>";
            }
    }   
        else{
            for ($j = 0; $j < 4; $j++){
                echo "<td class='szurke'></td>";
                echo"<td class='feher'></td>";
            }
        }
    
    }
    echo "</tr>";
    echo "</table>";


    ?>
</body>

</html>