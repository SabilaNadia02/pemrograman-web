<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="type/css" href="stye.css"/>
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("Avengers: Invinity War", 2018, 8.7),
                    array("The Avengers", 2012, 8.1),
                    array("Guardians of the Galaxy", 2014, 8.1),
                    array("Iron Man", 2018, 7.9)
                );
                echo "<tr>";
                    $nomor = 0; 
                    while($nomor<3){
                        echo "<td>". $movie[0][$nomor] ."</td>";
                        $nomor++;
                    }
                echo "</tr>";
                echo "<tr>";
                    $nomor = 0; 
                    while($nomor<3){
                        echo "<td>". $movie[1][$nomor] ."</td>";
                        $nomor++;
                    }   
                echo "</tr>";
                echo "<tr>";
                    $nomor = 0; 
                    while($nomor<3){
                        echo "<td>". $movie[2][$nomor] ."</td>";
                        $nomor++;
                    }
                echo "</tr>";
                echo "<tr>";
                    $nomor = 0; 
                    while($nomor<3){
                        echo "<td>". $movie[3][$nomor] ."</td>";
                        $nomor++;
                    }
                echo "</tr>";
            ?>
        </table>
    </body>
</html>