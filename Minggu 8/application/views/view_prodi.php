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
    Daftar Prodi Jurusan Teknologi Informasi
    <table border="1 solid black collapse">
        <tr>
            <td>No</td>
            <td>Prodi</td>
            <td>Keterangan</td>
        </tr>
        <?php
                foreach($Prodi as $row){
                echo "
                    <tr>
                        <td>".$row['no']."</td>
                        <td>".$row['prodi']."</td>
                        <td>".$row['ket']."</td>
                    </tr>
                ";
                }
            ?>
    </table>
</body>

</html>
