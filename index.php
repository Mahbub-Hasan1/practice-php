<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 700;
    $b = 565;
    $c = 'dkdk';

    if ($a >= 500 && $a <= 600) :
    ?>
        <h1>wow<h1>
            <?php

        else :
            ?>
                <h1>dor hoi nai<h1>
<?php

                endif;

                $ab = 1;

                while ($ab < 10) {
                    echo 'wow 10 teke choto hoise <br>';
                    $ab++;
                }


?>
</body>

</html>