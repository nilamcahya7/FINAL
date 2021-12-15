$q = mysqli_query ($con , "SELECT * FROM pendaftaran_pengguna ORDER BY nomor DESC LIMIT 1");
 $jumlah = mysqli_num_rows($q);
 $data = mysqli_fetch_array($q);
 if($jumlah <=0){
     $nomorbaru = 1 ;
 }
else{
    $nomorbaru =$data['nomor']+1;
}
<tr>
                        <td>Lokasi Vaksinasi : </td>
                        <td>
                            <select name="lokasi">
                                <option value="pilihan">--pilih lokasi vaksinasi--</option>
                                <option value="Kecamatan Purwasari">Kecamatan Purwasari</option>
                                <option value="Puskemas Purwasari">Puskesmas Purwasari</option>
                                <option value="Desa Purwasari">Desa Purwasari</option>
                            </select>
                        </td>
                    </tr>

                    tombol submit menggunakan header

                    <td>Nomor NIK
            <?php if($data['nik']== ""){
                echo "data belum diinputkan";
            }else{
                echo $data['nik'];
            }?>
            </td>
            <td>Ponsel
            <?php if($data['ponsel']== ""){
                echo "data belum diinputkan";
            }else{
                echo $data['ponsel'];
            }?>
            </td>
            <td>Email
            <?php if($data['email']== ""){
                echo "data belum diinputkan";
            }else{
                echo $data['email'];
            }?>
            </td>
            <td>Tanggal Lahir
            <?php if($data['tgl_lahir']== ""){
                echo "data belum diinputkan";
            }else{
                echo $data['tgl_lahir'];
            }?>
            </td>
            <?php if($data['nama']== ""){
                echo "data belum diinputkan";
            }else{
                echo $data['nama'];
            }?>
            if(isset($_POST['Daftar'])){
    header("Location: 5webvaksinasi.php");
    mysqli_query($con,"INSERT INTO db_regist (nomor,nama,email) VALUES
    nama = '$_POST[nama]',
    email = '$_POST[email]'");
}
?>