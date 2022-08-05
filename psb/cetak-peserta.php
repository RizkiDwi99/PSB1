<?php
    include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <meta name="viewport" content="eidth=device-width, initial-scale=1">
    <title>Cetak Peserta</title>
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
    <h2>Laporan Calon Siswa</h2><br><br>
    <table class="table" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pendafaran</th>
                    <th>Tahun Ajaran</th>
                    <th>Jurusan</th>
                    <th>Nama</th>
                    <th>Tempat, Tnggal Lahir</th>
                    <th>jenis kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                    while($row = mysqli_fetch_array($list_peserta)){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['id_pendaftaran'] ?></td>
                    <td><?php echo $row['thn_ajaran'] ?></td>
                    <td><?php echo $row['jurusan'] ?></td>
                    <td><?php echo $row['nama_peserta'] ?></td>
                    <td><?php echo $row['tempat_lahir'].', '.$row['tgl_lahir'] ?></td>
                    <td><?php echo $row['jenis_kelamin'] ?></td>
                    <td><?php echo $row['agama'] ?></td>
                    <td><?php echo $row['alamat_peserta'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>