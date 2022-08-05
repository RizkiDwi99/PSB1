<?php
    include '../koneksi.php';

    if(isset($_POST['submit'])){

        // ambil id terbesar di kolom id_pendaftaran,lalu ambil 5 karakter aja dari sebelah kanan
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateid = 'P'.date('Y').sprintf("%05s", $d->id + 1);
        
        //proses insert
        $insert = mysqli_query($conn,"INSERT INTO tb_pendaftaran VALUES (
                '".$generateid."',
                '".date('y-m-d')."',
                '".$_POST['th_ajaran']."',
                '".$_POST['jurusan']."',
                '".$_POST['nm']."',
                '".$_POST['Tempat_Lahir']."',
                '".$_POST['tgl_lahir']."',
                '".$_POST['jenis_kelamin']."',
                '".$_POST['Agama']."',
                '".$_POST['alamat']."'
     )");

    if($insert){
        echo '<script>window.location="/psb/psb/css/berhasil.php?id='.$generateid.'"</script>';
    }else{
        echo 'huft '.mysqli_error($conn);
    }





    }
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
</head>   
<body>

    <!-- agian box formulir -->
    <section class="box-formulir">

        <h2>Formulir Pendaftaran Siswa Baru</h2>

    <!-- bagian form -->
    <form action="" method="post">

     <div classs="box">
        <table border="0" class="table-form">
            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td>
                    <input type="text" name="th_ajaran" class="input-control" value="2022/2023"  readonly="">
                </td> 
                <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select class="input-control" name="jurusan">
                        <option value="">--pilih--</option>
                        <option value="Teknik Otomotif">Teknik Otomotif</option>
                        <option value="Teknik Las">Teknik Las</option>
                        <option value="Teknik Listrik">Teknik Listrik</option>
                    </select>
                </td> 
            </tr>
            </tr>
        </table>
     </div>
     <h3>Data Diri Calon Siswa</h3>
     <div classs="box">
        <table border="0" class="table-form">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nm" class="input-control">
                </td> 
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="Tempat_Lahir" class="input-control">
                </td> 
                
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir" class="input-control">
                </td> 
                </tr>
                <tr>
                 <td>Jenis Kelamin</td>
                 <td>:</td>
                 <td>
                    <input type="radio" name="jenis_kelamin" class="input-control" value="Laki-Laki"> Laki-laki &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="jenis_kelamin" class="input-control" value="perempuan"> perempuan
                </td> 
                </tr>
                 <td>Agama</td>
                 <td>:</td>
                   <td>
                    <select class="input-control" name="Agama">
                        <option value="">--pilih--</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindhu">Hindhu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Katolik">Katolik</option>
                        
                    </select>
                </td> 
            </tr>
            <tr>
                 <td>Alamat Lengkap</td>
                 <td>:</td>
                 <td>
                   <textarea class="input-control" name="alamat"></textarea>
             </td> 
               </tr>
                <tr>
                <td></td>
                <td>:</td>
                <td>
                    <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang"> 
                </td> 
                </tr>

        </table>
     </div>

    </form>

    </selection>
</body>
</html>