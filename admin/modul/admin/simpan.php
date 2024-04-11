<?php
// Aktifkan pelaporan error untuk pemecahan masalah yang lebih baik
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Sertakan file sesi_admin.php untuk mengelola sesi
include "sesi_admin.php";

// Periksa apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])){
    // Sertakan file koneksi.php untuk menghubungkan ke database
    include "../koneksi.php";
    // Sertakan file upload.php untuk fungsi unggah foto
    include "../fungsi/upload.php";

    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash password
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $fotobaru = date('dmYHis') . $namafile;
    $tipefile = $_FILES['foto']['type'];

    // Cek apakah username sudah ada di database
    $sql = "SELECT * FROM tb_admin WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        echo "Username sudah ada";
    } else {
        // Jika foto diunggah, unggah foto dan sisipkan data
        if(!empty($lokasi)){
            $folder = "../images/admin/";
            $ukuran = 100;
            UploadFoto($fotobaru, $folder, $ukuran);

            $sql = "INSERT INTO tb_admin (username, password, nama, telepon, foto) VALUES ('$username', '$password', '$nama', '$telepon', '$fotobaru')";
        } else {
            // Jika foto tidak diunggah, sisipkan data tanpa foto
            $sql = "INSERT INTO tb_admin (username, password, nama, telepon) VALUES ('$username', '$password', '$nama', '$telepon')";
        }
        
        // Eksekusi kueri SQL
        if(mysqli_query($koneksi, $sql)){
            // Redirect ke halaman awal admin setelah penyimpanan berhasil
            header("location: ?m=admin&s=awal");
            exit(); // Penting: keluar dari skrip setelah pengalihan header
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
} else {
    echo "Gagal"; // Jika tombol 'simpan' tidak ditekan
}
?>
