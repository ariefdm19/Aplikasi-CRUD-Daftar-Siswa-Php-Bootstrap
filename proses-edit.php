<?php
include("crud.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    // buat query update
    $sql = "UPDATE tb_gts SET nis='$nis', nama='$nama', jenis_kelamin='$jk', jurusan='$jurusan', email='$email' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: index.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
