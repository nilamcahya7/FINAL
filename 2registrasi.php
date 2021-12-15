<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="registrasi.css">
</head>

<body>
<nav>
        <ul>
            <li><a href="3entang.php">Tentang</a></li>
            <li><a href="4ketentuan.php">Penyedia Layanan</a></li>
            <li><a href="5webvaksinasi.php">Beranda</a></li>
        </ul>
    </nav>
    <h2>Registrasi Akun</h2>
    <div class="warp">
        <div class="container">
            <form name= "insert" action="" method="post">
                <table>
                    <tr>
                        <td>Nama : </td>
                        <td><input type="text" name="nama" placeholder="Masukan Nama Lengkap"><br></td>
                    </tr>
                    <tr>
                        <td>Nomor NIK : </td>
                        <td><input type="text" name="nik" placeholder="Masukan Nomor NIK"><br></td>
                    </tr>
                    <tr>
                        <td>No Ponsel : </td>
                        <td><input type="text" name="ponsel" placeholder="Masukan Nomor Ponsel"><br></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input type="text" name="email" placeholder="Masukan Email"><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="Daftar" id = "btn" class="mybtn">Registrasi</button></td>
                        <script src="dist/sweetalert2.all.min.js"></script>
                        <script>
                            const btn = document.getElementById('btn');
                            btn.addEventListener('click', function(){
                                swal.fire({
                                    title:'Berhasil Registrasi!',
                                    icon : 'success'
                                })
                            })
                        </script>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
<?php
session_start();
include "koneksi.php";
$q = mysqli_query ($con , "SELECT * FROM db_regist ORDER BY nomor DESC LIMIT 1");
$jumlah = mysqli_num_rows($q);
$data = mysqli_fetch_array($q);
    if($jumlah <=0){
        $nomorbaru = 1 ;
     }
    else{
         $nomorbaru =$data['nomor']+1;
    }
    if(isset($_POST['Daftar'])){
        header("Location:5webvaksinasi.php");
         $sql=mysqli_query($con,"INSERT INTO db_regist (nomor,nama,nik,email,ponsel) 
         VALUES 
        ('$nomorbaru', '$_POST[nama]','$_POST[nik]','$_POST[email]','$_POST[ponsel]')");
        $urut = $nomorbaru;
    }
?>