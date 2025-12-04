<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-2_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 2</h1>
        <!--
            Crea un programa que llisti les notes dels alumnes d’una classe. 
            Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
            Cada alumne tindrà 5 notes (valorades del 0 al 10).

            A més, crea una funció que, donades les notes de tots els alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
        -->
        <?php
        $Alumns = array (
            array("Anna",6,8,5,9,3),
            array("Joan",5,3,2,7,6),
            array("Ruben",8,9,6,7,9),
            array("Sara",7,5,3,6,4)
            );
        ?>
        <h2>Alumnes i les seves notes</h2>
        <ul>        
            <?php echo "<li>" . $Alumns[0][0]." - Nota 1: ".$Alumns[0][1]." - Nota 2: ".$Alumns[0][2]." - Nota 3: ".$Alumns[0][3]." - Nota 4: ".$Alumns[0][4]." - Nota 5: ".$Alumns[0][5]."</li><br>";?>
            <?php echo "<li>" . $Alumns[1][0]." - Nota 1: ".$Alumns[1][1]." - Nota 2: ".$Alumns[1][2]." - Nota 3: ".$Alumns[1][3]." - Nota 4: ".$Alumns[1][4]." - Nota 5: ".$Alumns[1][5]."</li><br>";?>
            <?php echo "<li>" . $Alumns[2][0]." - Nota 1: ".$Alumns[2][1]." - Nota 2: ".$Alumns[2][2]." - Nota 3: ".$Alumns[2][3]." - Nota 4: ".$Alumns[2][4]." - Nota 5: ".$Alumns[2][5]."</li><br>";?>
            <?php echo "<li>" . $Alumns[3][0]." - Nota 1: ".$Alumns[3][1]." - Nota 2: ".$Alumns[3][2]." - Nota 3: ".$Alumns[3][3]." - Nota 4: ".$Alumns[3][4]." - Nota 5: ".$Alumns[3][5]."</li><br>";?>
        </ul>

        <?php
        Mitjanes($Alumns);

        function Mitjanes($Alumns){
            $SumN1 = ($Alumns[0][1] + $Alumns[1][1] + $Alumns[2][1] + $Alumns[3][1]) / count($Alumns);
            echo "<h3>Mitjana nota 1: ". $SumN1."</h3>";
            $SumN2 = ($Alumns[0][2] + $Alumns[1][2] + $Alumns[2][2] + $Alumns[3][2]) / count($Alumns);
            echo "<h3>Mitjana nota 2: ". $SumN2."</h3>";
            $SumN3 = ($Alumns[0][3] + $Alumns[1][3] + $Alumns[2][3] + $Alumns[3][3]) / count($Alumns);
            echo "<h3>Mitjana nota 3: ". $SumN3."</h3>";
            $SumN4 = ($Alumns[0][4] + $Alumns[1][4] + $Alumns[2][4] + $Alumns[3][4]) / count($Alumns);
            echo "<h3>Mitjana nota 4: ". $SumN4."</h3>";
            $SumN5 = ($Alumns[0][5] + $Alumns[1][5] + $Alumns[2][5] + $Alumns[3][5]) / count($Alumns);
            echo "<h3>Mitjana nota 5: ". $SumN5."</h3>";

            $MitjA1 = ($Alumns[0][1] + $Alumns[0][2] + $Alumns[0][3] + $Alumns[0][4] + $Alumns[0][5]) / 5;
            echo "<h3>Mitjana notes ".$Alumns[0][0].": ". $MitjA1."</h3>";

            $MitjA2 = ($Alumns[1][1] + $Alumns[1][2] + $Alumns[1][3] + $Alumns[1][4] + $Alumns[1][5]) / 5;
            echo "<h3>Mitjana notes ".$Alumns[1][0].": ". $MitjA2."</h3>";

            $MitjA3 = ($Alumns[2][1] + $Alumns[2][2] + $Alumns[2][3] + $Alumns[2][4] + $Alumns[2][5]) / 5;
            echo "<h3>Mitjana notes ".$Alumns[2][0].": ". $MitjA3."</h3>";

            $MitjA4 = ($Alumns[3][1] + $Alumns[3][2] + $Alumns[3][3] + $Alumns[3][4] + $Alumns[3][5]) / 5;
            echo "<h3>Mitjana notes ".$Alumns[3][0].": ". $MitjA4."</h3>";

             $MitjTot = (
                $Alumns[0][1] + $Alumns[0][2] + $Alumns[0][3] + $Alumns[0][4] + $Alumns[0][5] +
                $Alumns[1][1] + $Alumns[1][2] + $Alumns[1][3] + $Alumns[1][4] + $Alumns[1][5] +
                $Alumns[2][1] + $Alumns[2][2] + $Alumns[2][3] + $Alumns[2][4] + $Alumns[2][5] +
                $Alumns[3][1] + $Alumns[3][2] + $Alumns[3][3] + $Alumns[3][4] + $Alumns[3][5]
                ) 
                / 
                (count($Alumns)*5);
            echo "<h3>Mitjana notes total: ". $MitjTot."</h3>";

        }
        ?>
    </div>
    

</body>
</html>