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
            <?php
            echo "<li>" . $MyArray[0] . "</li>";
            echo "<li>" . $MyArray[1] . "</li>";
            echo "<li>" . $MyArray[2] . "</li>";
            echo "<li>" . $MyArray[3] . "</li>";
            echo "<li>" . $MyArray[4] . "</li>";       
            ?>
        </ul>
    </div>

</body>
</html>