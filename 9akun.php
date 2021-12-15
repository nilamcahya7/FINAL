
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun saya</title>
    <link rel="stylesheet" href="akun.css">
</head>
<style>
table { border-collapse: separate; line-height:35px; }
tr { display: block; float: left; width:350px;}
th,  td { display: block; }
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
    <h2>PROFILE</h2>
    <table>
    <?php
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
        $no=0;
        $query    =mysqli_query($con, "SELECT * FROM db_regist ORDER BY nomor DESC LIMIT 1");
        while($data    =mysqli_fetch_array($query)){
        ?>
        <table border= "" bgcolor="white">
            <tr border="1">
            <td>Nama Lengkap : <br>
                <?php 
                if($data['nama']== ""){
                    echo "--Belum ada nama--";
                }else{
                    echo $data['nama'];
                }?>
            </td>
            <td>Nomor NIK : <br>
                <?php 
                if($data['nik']== ""){
                    echo "--Belum ada NIK--";
                }else{
                    echo $data['nik'];
                }?>
            </td>
            <td>Ponsel : <br>
                <?php 
                    if($data['ponsel']== ""){
                        echo "--Belum ada nomor ponsel--";
                    }else{
                        echo $data['ponsel'];
                    }?>
            </td>
            <td>Email : <br>
                <?php 
                if($data['email']== ""){
                    echo "--Belum ada email--";
                }else{
                    echo $data['email'];
                }?>
            </td>
            </tr>
        </table>
    <?php
        }
    ?>
        
    </table>
</body>
</html>
