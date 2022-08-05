<?php
    include '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="eidth=device-width, initial-scale=1">
    <title>psb Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<style>
</style>
</head>   
<body>
    <!-- bagian box formulir -->
    <section class="box-formulir mt-5" id="box">
    <div class="container">
        <div class="row justfy-content-center">
            <div class="col-7 border border-3 border-dark p-2">
                <h2>Pendaftaran Berhasil</h2>

                <div class="box">
                    <h4>kode pendaftaran anda adalah <?php echo $_GET['id'] ?></h4>
                    <a class="btn btn-danger mt-3" href="../cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Daftar</a>
                </div>
            </div>
        </div>
    </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>