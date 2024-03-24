<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BUKU</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <center>
    <h1>DATA BUKU</h1>
    <a href="tambah.php">Tambah Buku</a>
    </center>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>TANGGAL TERBIT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM buku 
                ORDER BY id_buku ASC";
                $result = mysqli_query($koneksi,$query);

                if (!$result) {
                    die ("Query Error :". mysqli_errno($koneksi)."-".mysqli_error());
                }
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no;  ?></td>
                        <td><?=  $row['id_buku'];  ?></td>
                        <td><?= $row['judul'];  ?></td>
                        <td><?= $row['pengarang'];  ?></td>
                        <td><?= $row['tgl_terbit'];  ?></td>
                        <td>
                            <a href="edit_buku.php?id_buku=<?php
                            echo $row['id_buku']; ?>">EDIT</a>
                            <a href="proses_hapus.php?id_buku=<?php echo $row['id_buku']; ?>" onclick="return confirm('Yakin meh ninggal aku mas?:(')">DELETE</a>

                </td>
                    </tr>
                    <?php
                        $no++;
                    
                }
            ?>
        </tbody>
    </table>
</body>
</html>