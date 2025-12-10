<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-1_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div class="mostrar">
        <h1>Array de 5 elements</h1>
        <?php
        $MyArray = [1,2,3,4,5];
        ?>
        <ul>
            <?php ShowArray($MyArray); ?>
        </ul>
    </div>
    <?php 
    function ShowArray($MyArray){
        foreach ($MyArray as $x) {
            echo "<li>" . $x . "</li>";
        }           
    } 
    ?>
</body>
</html>