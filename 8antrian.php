<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<style>
    table{
        position: relative;
        top: 50px;
    }
    button{
        margin-top : 60px;
        margin-left : 820px;
    }
    h2{
        margin: auto;
    background-color:#2eb37b ;
    width: 40%;
    margin-left: 42%;
    padding-top: 120px;
   
    }
</style>
<body>
    <nav>
        <ul>
            <li><a href="9akun.php">Akun</a></li>
            <li><a href="7Tentang.php">Tentang</a></li>
            <li><a href="10ketentuan.php">Penyedia Layanan</a></li>
            <li><a href="5webvaksinasi.php">Beranda</a></li>
        </ul>
    </nav>
    <h2>Nomor Antrian Anda</h2>
    <table border="1" cellpadding="2" bgcolor="white">
        <tr bgcolor="#1c9261">
            <td width="90">NOMOR ANTRIAN</td>
            <td width ="250">NAMA</td>
        </tr>
        <?php
        include "koneksi.php";
        $no=0;
        $query    =mysqli_query($con, "SELECT nomor,nama FROM db_pendaftaran ORDER BY nomor DESC LIMIT 1");
        while($data    =mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?=$data['nomor']?></td>
            <td><?=$data['nama']?></td>
        </tr>
        <?php
        }
    ?>

    </table>
    <tr>
        <td></td>
        <td><a href="5webvaksinasi.php"><button id="btn">Kembali</button></a></td>
        <script src="dist/sweetalert2.all.min.js"></script>
        <script>
            const btn = document.getElementById('btn');
            btn.addEventListener('click', function(){
                swal.fire({
                    title:'Terimakasih!',
                    text :'Silahkan Menunggu Antrian' ,
                    icon : 'success'
                })
            })
        </script>
    </tr>
</body>
</html>

