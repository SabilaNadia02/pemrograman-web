<!DOCTYPE HTML>
<html>
    <head>

    </head>
    <body>
        <?php
            $a = true;
            $b = false;

            echo "Nilai a AND b adalah "; var_dump($a and $b);
            echo "<br> Nilai a OR b adalah "; var_dump($a or $b);
            echo "<br> Nilai a XOR b adalah "; var_dump($a xor $b);

            echo "<br><br> Nilai a && b adalah "; var_dump($a && $b);
            echo "<br> Nilai a || b adalah "; var_dump($a || $b);
            echo "<br> Nilai !a || b adalah "; var_dump(!$a || $b);
        ?>
    </body>
</html>