<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-1_ex-3</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div class="mostrar">
        <h1>Arrays</h1>
        <!--
        Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
        La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
        -->

        <?php

        $MyArray = array("red", "green", "blue", "yellow");
        $Character = 'l';

        echo "<h2>Tenim l'array:</h2>";
        print_r($MyArray);
        echo "<h2>Busquem d'ins de l'array el caràcter '$Character'</h2><br>";
        

        $result = SearchCharacter($MyArray, $Character);
        ShowResult($result, $Character);

        $Character = 'e';
        echo "<h2>Ara busquem d'ins de l'array el caràcter '$Character'</h2><br>";
        $result = SearchCharacter($MyArray, $Character);
        ShowResult($result, $Character);


        function SearchCharacter($MyArray, $Character){

            $Contains=TRUE;
            foreach ($MyArray as $x) {
                if (!strpos($x, $Character)){
                    $Contains = FALSE;
                }
            }
            return $Contains;
        }

        function ShowResult($result, $Character){
            if ($result) {
                echo "<h2>Resultat: Si conté el caracter '$Character' en tots els elements del array</h2><br>";            
            }
            else {
                echo "<h2>Resultat: No conté el caracter '$Character' en tots els elements del array</h2><br>";
            }
        }
        ?>

    </div>

</body>
</html>