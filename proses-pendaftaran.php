<?php
include("crud.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    // buat query
    $sql = "INSERT INTO tb_gts (nis, nama, jenis_kelamin, jurusan, email) VALUE ('$nis', '$nama', '$jk', '$jurusan', '$email')";
    $query = mysqli_query($db, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>