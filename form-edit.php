<?php
include("crud.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_gts WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Data | GTS BASCOM BANDUNG</title>

    <style type="text/css">
                    input, textarea { 
                        padding: 0; margin: 0;
                    }
                    h2{
                        color:#50626C;
                        text-align: center;
                        font-family: arial;
                        text-transform: uppercase;
                        border: 3px solid #f1f1f1;
                        padding: 5px;
                        width: 490px;
                        margin: auto;
                        margin-bottom: 10px;
                        margin-top: 20px;
                    }
                    form {
                        border: 3px solid #f1f1f1;
                        font-family: arial;
                        width: 500px;
                        margin: auto;
                    }

                    input[type=text], input[type=password] {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                    }
                    label{
                        color:#50626C;
                        text-transform: uppercase;
                    }
                    button {
                        background-color: #049372;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        width: 100%;
                    }

                    button:hover {
                        opacity: 0.8;
                    }

                    .cancelbtn {
                        width: auto;
                        padding: 10px 18px;
                        background-color: #f03434;
                    }

                    .imgcontainer {
                        text-align: center;
                        margin: 24px 0 12px 0;
                    }

                    img.avatar {
                        width: 40%;
                        border-radius: 50%;
                    }

                    .container {
                        padding: 16px;
                    }

                    span.psw {
                        float: right;
                        padding-top: 16px;

                    }
                    span{
                        color:#50626C;
                    }
                    /* Change styles for span and cancel button on extra small screens */
                    @media screen and (max-width: 300px) {
                        span.psw {
                           display: block;
                           float: none;
                        }
                        .cancelbtn {
                           width: 100%;
                        }
                    }
            </style>


</head>
<body>
    <header>
        <h3>Formulir Edit Data</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
        <p>
            <label for="nis">NIS: </label>
            <input type="text" name="nis" placeholder="nis" value="<?php echo $siswa['nis'] ?>" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="jurusan">jurusan: </label>
            <?php $jurusan = $siswa['jurusan']; ?>
            <select name="jurusan">
                <option <?php echo ($jurusan == 'RPL') ? "selected": "" ?>>RPL</option>
                <option <?php echo ($jurusan == 'TKJ') ? "selected": "" ?>>TKJ</option>
                <option <?php echo ($jurusan == 'Multimedia') ? "selected": "" ?>>Multimedia</option>
            </select>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" value="<?php echo $siswa['email'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
    </body>
</html>