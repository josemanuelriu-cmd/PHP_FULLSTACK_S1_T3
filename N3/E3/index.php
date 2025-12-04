<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-3_ex-3</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 3</h1>
        <!--
            Donat un array d’enters, 
            fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().
        -->
        <?php
            $MyArray = [1,2,3,4,5,6,7,8,9];
        ?>
        <ul>
            <?php 
                foreach ($MyArray as $element) {
                    echo "<li>$element</li>"; 
                }
            ?>
        </ul>
        <?php   
            function GetPrimeNumbers($MyArray, $base, $number){
		
                $MyArray = array_fill(0, $number + 1, true);
                
                for ($i=2; $i*$i<=$number; $i++){
                    if ($MyArray[$i]) {
                        for ($j=$i*$i; $j<$number; $j += $i) {
                            $MyArray[$j] = false;
                        }
                    }
                }
                $FinalArray = [];
                for ($i=$base ; $i <= $number; $i++){
                    if($MyArray[$i]) {
                        $FinalArray[] = $i;
                    }
                }
                return $FinalArray;		
            }
        
            function AddNumbers($v1,$v2) {
                return $v1 + $v2;
            }
            //print_r(count($MyArray));
            $NewArray = GetPrimeNumbers($MyArray,2,count($MyArray));
            $valor = array_reduce($NewArray,"AddNumbers");
        ?>
        <h2>La suma dels valors prims del array es: <?= $valor ?></h2>        
    </div>
</body>
</html>