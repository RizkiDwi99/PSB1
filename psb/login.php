<?php
session_start();
    include '../koneksi.php';

    if(isset($_POST['login'])){

            // cek akun ada apa tidak
            $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE 
            USERNAME ='".htmlspecialchars($_POST['user'])."' AND password = '".MD5(htmlspecialchars($_POST['pass']))."' ");

        if(mysqli_num_rows($cek) > 0){
            $a = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id_admin'] = $a->id_admiin;
            $_SESSION['nama'] =$a->nama_admin;
            echo '<script>window.location="beranda.php"</script>';
        }else{
            echo '<script>alert("Gagal, username atau password salah")</script>';
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>   
<body>
        <!-- bagian main login -->
        <section class="main-login">

            <div class="box-login">
                <h2>Login Admin</h2>

                <!--bagian form login -->
                <form action=""method="post">

                <div class="box"></div>
                    <table>
                        <tr>
                            <td>username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="user" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="pass" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>:</td>
                            <td>
                                <input type="submit" name="login" value="Login" class="btn-login">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

        </section>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>