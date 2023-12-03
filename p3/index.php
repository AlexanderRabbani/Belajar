<?php
include("./conection.php");
global $conn;

$query = $conn->query("SELECT * FROM store ORDER BY id DESC");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stok Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include './layouts/navbar.php';
    ?>

    <div class="container mt-4">
        <h3>Data Store</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" href="tambah-store.php">Tambah Data</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Store</th>
                    <th scope="col">Alamat</th>
                    <th scope="col" class="text-center">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no ?></th>
                        <td><?php echo $row["name"] ?></td>
                        <td><?php echo $row["address"] ?></td>
                        <td class="text-center">
                            <div class="d-inline-flex gap-1">
                                <a href="edit-store.php" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus-store.php" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>