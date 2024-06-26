<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Website Toko Baju</title>
</head>
<body>
    <div class="overflow-hidden p-3 p-md-5 mx-auto w-100 text-center">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Merek Baju</th>
            <th scope="col">Jenis Baju</th>
            <th scope="col">Ukuran Baju</th>
            <th scope="col">Pilihan</th>
            </tr>
        </thead>

        <?php
            include 'koneksi.php';
            $query = "SELECT * FROM tb_baju";

            $hasil = mysqli_query($koneksi, $query);
            $no = 0;
            while ($data = mysqli_fetch_array($hasil)) {
                $id_barang = $data['id_baju'];
                ?>
                <tbody>
                <tr>
                    <td><?php echo $data["id_baju"]; ?></td>
                    <td><?php echo $data["merek_baju"]; ?></td>
                    <td><?php echo $data["jenis_baju"]; ?></td>
                    <td><?php echo $data["ukuran_baju"]; ?></td>
                    <td>
                        <a href="edit.php?id_baju=<?php echo $id_baju;?>" class="btn btn-warning" role="button">Edit Pesanan</a>
                        <a href="hapus.php?id_baju=<?php echo $id_baju;?>" class="btn btn-danger" role="button">Hapus Pesanan</a>
                    </td>
                </tr>
                </tbody>
                <?php
            }
        ?>
        </table>
        <!-- <a class="btn btn-dark mt-5" href="dashboard.php #order" role="button">Kembali</a> -->
        <a class="btn btn-dark mt-5" href="tambah.php" role="button">Buat Pesanan</a>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>