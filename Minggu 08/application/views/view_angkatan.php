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
    Daftar Angkatan
    <table border="1 solid black collapse">
        <tr>
            <td>No</td>
            <td>Tahun</td>
        </tr>
        <?php
                foreach($angkatan as $row){
                echo "
                    <tr>
                        <td>".$row['no']."</td>
                        <td>".$row['tahun']."</td>
                    </tr>
                ";
                }
            ?>
    </table>
</body>

</html>
