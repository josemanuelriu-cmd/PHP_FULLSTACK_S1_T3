<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema-3_Level-3_ex-2</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>
    <div>
        <h1>Arrays nivell 3</h1>
        <!--
            Donat un array d’strings, fes un programa que:

            Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().
        -->
        <?php
            $MyArray = ["Hello","Goodbye","Thanks","Arrays"];
        
            function Pair($var){
                if ((strlen($var) % 2)==0){
                    return($var);
                }
            }
            print_r(array_filter($MyArray,"Pair"));
        ?>
    </div>
</body>
</html>