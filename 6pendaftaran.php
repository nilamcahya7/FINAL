<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Vaksinasi</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>

<body>
<nav>
        <ul>
            <li><a href="9akun.php">Akun</a></li>
            <li><a href="7Tentang.php">Tentang</a></li>
            <li><a href="10ketentuan.php">Penyedia Layanan</a></li>
            <li><a href="5webvaksinasi.php">Beranda</a></li>
        </ul>
    </nav>
    <h2>Formulir Pendaftaran Vaksinasi Covid-19</h2>
    <div class="warp">
        <div class="container">
            <form name = "insert "action="" method="post">
                <table>
                    <tr>
                        <td>Nomor NIK : </td>
                        <td><input type="number" name="nik" placeholder="Masukan nomor NIK"><br></td>
                    </tr>
                    <tr>
                        <td>Nama : </td>
                        <td><input type="text" name="nama" placeholder="Masukan Nama"><br></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir : </td>
                        <td><input type="date" name="tgl_lahir" placeholder="Masukan Tanggal Lahir"><br></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td>
                            <select name="jenis_kelamin">
                                <option value="pilihan">--pilih jenis kelamin--</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="laki-laki">Laki-Laki</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Handphone : </td>
                        <td><input type="text" name="nomor_ponsel" placeholder="Masukan Nomor ponsel"><br></td>
                    </tr>
                    <tr>
                        <td>alamat : </td>
                        <td><input type="text" name="alamat" placeholder="Masukan Alamat"><br></td>
                    </tr>
                    <tr>
                        <td>lokasi : </td>
                        <td>
                            <select name="lokasi">
                            <option value="kecamatan">Kecamatan Purwasari</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="Daftar" id = "btn">Daftar</button></td>
                        <script src="dist/sweetalert2.all.min.js"></script>
                        <script>
                            const btn = document.getElementById('btn');
                            btn.addEventListener('click', function(){
                                swal.fire({
                                    title:'Berhasil Mendaftar!',
                                    text :'Silahkan Mengambil Nomor Antrian' ,
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
$q = mysqli_query ($con , "SELECT * FROM db_pendaftaran ORDER BY nomor DESC LIMIT 1");
$jumlah = mysqli_num_rows($q);
$data = mysqli_fetch_array($q);
    if($jumlah <=0){
        $nomorbaru = 1 ;
     }
    else{
         $nomorbaru =$data['nomor']+1;
    }
    if(isset($_POST['Daftar'])){
        header("Location:8antrian.php");
         $sql=mysqli_query($con,"INSERT INTO db_pendaftaran (nomor,nik,nama,tgl_lahir,jenis_kelamin,nomor_ponsel,alamat,lokasi) 
         VALUES 
        ('$nomorbaru', '$_POST[nik]','$_POST[nama]','$_POST[tgl_lahir]','$_POST[jenis_kelamin]',
        '$_POST[nomor_ponsel]','$_POST[alamat]','$_POST[lokasi]')");
        $urut = $nomorbaru;
    }
?>

