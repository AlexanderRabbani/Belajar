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
        <h3>Tambah Store</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-warning me-md-2" href="index.php">Kembali</a>
        </div>
        <form action="lib/add_store.php" method="POST"  class="form-control p-4 mt-2">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Store</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Store">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="tambah_store" type="submit">Simpan</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>