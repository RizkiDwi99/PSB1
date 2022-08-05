<?php
    include '../koneksi.php';

    $peserta = mysqli_query($conn,"SELECT * FROM tb_pendaftaran WHERE id_pendaftaran ='".$_GET['id']."' " );
$p = mysqli_fetch_object($peserta);
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
<script>
    window.print();
</script>
</head>  
<body>
    <div class="bukti">
    <h2>Bukti Pendaftaran</h2>
    <table class="table-data" border="0">
        <tr>
            <td>kode pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?php echo $p->thn_ajaran ?></td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td><?php echo $p->jurusan ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $p->nama_peserta ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $p->tempat_lahir.', '.$p->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $p->jenis_kelamin ?></td>
            <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $p->agama ?></td>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $p->alamat_peserta ?></td>
        </tr>
        </tr>
        </tr>
    </table>
    </div>
</body>
</html>