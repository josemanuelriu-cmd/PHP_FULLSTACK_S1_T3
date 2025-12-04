<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-2_ex-1</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 2</h1>
        <!--
            Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:

            La llista de convidats en comú entre les dues llistes.
            La mescla de la llista de convidats(sense repeticions).
            La llista de convidats exclusius de la primera llista.
            La llista de convidats exclusius de la segona llista.
        -->
        <?php
            $List1 = ["Laura","Iris","Edu","Juan","Pepe"];
            $List2 = ["Ana","Felipe","Ruben","Laura","Pepe"];
        ?>
        <h2>Tenim 2 llistats</h2>
        <h3>Llistat 1:</h3>        
        <ul>
            <?php 
                foreach ($List1 as $element) {
                    echo "<li>$element</li>"; 
                }
            ?>
        </ul>
            

        <h3>Llistat 2:</h3>
        <ul>
            <?php 
                foreach ($List2 as $element) {
                    echo "<li>$element</li>"; 
                }
            ?>
        </ul>
        <br>

        <h3>Convidats en comú entre les dues llistes</h3>
        <?php $Result=array_intersect($List1,$List2); ?>
        <ul>
        <?php 
            foreach ($Result as $element) {
                echo "<li>$element</li>"; 
            }
        ?>
        </ul>
        <br>

        <h3>Mescla de la llista de convidats(sense repeticions)</h3>
        <?php
        
            $Result = array_merge($List1,$List2);
            $Result2 = array_unique($Result);
        ?>
        <ul>
        <?php 
            foreach ($Result2 as $element) {
                echo "<li>$element</li>"; 
            }
        ?>
        </ul>
        <br>

        <h3>La llista de convidats exclusius de la primera llista</h3>
        <?php
        
            $Result = array_merge($List1,$List2);
            $Result2 = array_unique($Result);
            $Result3 = array_diff($Result2, $List2);
        ?>
        <ul>
        <?php 
            foreach ($Result3 as $element) {
                echo "<li>$element</li>"; 
            }
        ?>
        </ul>
        <br>

        <h3>La llista de convidats exclusius de la segona llista</h3>
        <?php
        
            $Result = array_merge($List1,$List2);
            $Result2 = array_unique($Result);
            $Result3 = array_diff($Result2, $List1);
        ?>
        <ul>
        <?php 
            foreach ($Result3 as $element) {
                echo "<li>$element</li>"; 
            }
        ?>
        </ul>
    </div>
    

</body>
</html>