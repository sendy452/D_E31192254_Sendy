<html>
    <head><title>Controller, Model dan View lebih dari 1 Variabel</title></head>
<body>
    <h2>Mengirim Lebih Dari 1 Variabel</h2>
    <?php
        foreach($tampil as $row){
            echo "Nama: ".$row['nama'];
            echo "<br/>";
            echo "NIM: ".$row['nim'];
            echo "<br/>";
            echo "Golongan: ".$row['gol'];
            echo "<hr/>";
        }
    ?>
</body>
</html>
