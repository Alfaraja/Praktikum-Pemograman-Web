<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>

    <!-- PHP -->
        <?php
        echo "<br>";
        $nama[] = "Alfaraja &nbsp;";
        $nama[] = "Agung &nbsp;";
        $nama[] = "Prasetyo &nbsp;";
        echo $nama[0] . $nama[1] . $nama[2];
        echo "<br><br>";

        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;

        ?>
    <!-- PHP -->

    </body>
</html>
