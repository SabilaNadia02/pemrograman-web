<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makanfav"] = "Rujak";
            $_SESSION["minumanfav"] = "Es Teler";
            echo "Session telah diset";
        ?>
    </body>
</html>