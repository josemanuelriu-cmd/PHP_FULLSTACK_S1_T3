<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-1_ex-4</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div class="mostrar">
        <h1>Arrays</h1>
        <!--
        Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
            nom
            edat
            email
            menjar favorit
        -->
        <?php
        $MyArray = ["Nom" => "Jose Manuel", "Edat" => 44, "Email" => "josemanuelriu@gmail.com", "Menjar favorit" => "Croquetes"];        
        ?>
        <ul>
            <?php ShowArray($MyArray); ?>
        <ul>
                    
        <?php
        function ShowArray($MyArray){
            foreach ($MyArray as $x) {
                echo "<li>" . $x . "</li>";
            }           
        }
        ?>
    </div>
</body>
</html>