<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makanfav"] = "Sate Padang";
            echo "Session makanfav telah diubah";
        ?>
    </body>
</html>