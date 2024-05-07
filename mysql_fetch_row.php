<html>
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <h1>Koneksi database dengan mysqli_fetch_row()</h1>
        <?php
        $conn = mysqli_connect('localhost', 'root', '') or die ('Koneksi gagal.');
        mysqli_select_db($conn, 'percobaan1');
        $hasil = mysqli_query($conn, 'SELECT * FROM liga');
        while ($row = mysqli_fetch_row($hasil)) {
            echo 'Liga '.$row[1];
            echo ' mempunyai '.$row[2];
            echo ' wakil di Liga Champion <br>';
        }
        ?>
    </body>
</html>