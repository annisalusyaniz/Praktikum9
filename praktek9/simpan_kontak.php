
<?php
include "admin/koneksi.inc.php";


//memindahkan nilai data form ke variabel sederhana agar mudah ditulis

    if(isset($_POST['Submit'])) {
    $nama=$_POST['nama'];
    $jkel=$_POST['jkel'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $kota=$_POST['kota'];
    $pesan=$_POST['pesan'];

    $sql = "INSERT INTO kontak (nama,jkel,email,alamat,kota,pesan) VALUES ('$nama','$jkel','$email','$alamat',' $kota','$pesan')";
        $kontak= mysqli_query($conn, $sql);

            if ($kontak) {
            echo "Success";
            exit;
            }
        else {
        echo "Failed";
        exit;
        }
    }
    header("location:kontak.html");
?>