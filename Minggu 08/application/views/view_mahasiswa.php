<!DOCTYPE html>
<html lang="">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    Daftar Mahasiswa
    <table border="1 solid black collapse">
        <tr>
            <td>Nama</td>
            <td>Prodi</td>
        </tr>
        <?php
        foreach($Mahasiswa as $row){
        echo "
                <tr>
                    <td>".$row['nama']."</td>
                    <td>".$row['prodi']."</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>
