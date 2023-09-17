<!DOCTYPE HTML>
<html>
    <head>

    </head>
    <body>
        <h2>Fungsi</h2>
        <?php
            function familyName($name, $year){
                echo "$name Refsnes. Born in $year <br>";
            }

            familyName("Hege","1975");
            familyName("Stale","1978");
            familyName("Kai Jim", "1983");
        ?>
    </body>
</html>