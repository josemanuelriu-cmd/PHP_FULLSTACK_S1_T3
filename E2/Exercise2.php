<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-1_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div class="mostrar">
        <h1>Tenim l'array:</h1>
        <?php
            $MyArray = [1,2,3,4,5,6];
            print_r($MyArray);
        ?>
        <h2>
            El tamany del array es: <?= count($MyArray); ?>
        </h2>
        <h2>
            Eliminem un element del array
        </h2>
        <?php $LastElement = array_pop($MyArray);?>
         <h2>
            Ara el tamany del array es: <?= count($MyArray); ?>
        </h2>
         <h2>
            i conte els elements:
        </h2>
        <?php
            print_r($MyArray);
        ?>    
    </div>

</body>
</html>