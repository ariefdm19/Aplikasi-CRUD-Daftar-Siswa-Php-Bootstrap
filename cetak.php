<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Pendaftaran GTS BASCOM BANDUNG</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<body>

	<center>

		<h2>DATA GTS BASCOM BANDUNG</h2>

	</center>

	<div class="table-responsive">
           <?php include("crud.php"); ?>
  <nav>
    <a href="form-daftar.php">[+] Tambah Data Baru</a>
  </nav>
  <br>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>NIS</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>jurusan</th>
      <th>Email</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM tb_gts";
    $query = mysqli_query($db, $sql);
    $no=1;
    while($siswa = mysqli_fetch_array($query)){
      echo "<tr>";
      echo "<td>".$siswa['id']."</td>";
      echo "<td>".$siswa['nis']."</td>";
      echo "<td>".$siswa['nama']."</td>";
      echo "<td>".$siswa['jenis_kelamin']."</td>";
      echo "<td>".$siswa['jurusan']."</td>";
      echo "<td>".$siswa['email']."</td>";
      echo "<td>";
      echo "<td><a href='form-edit.php?id=".$siswa['id']."'class='btn btn-success'>Edit</button></a> | ";
      echo "<a href='hapus.php?id=".$siswa['id']."'class='btn btn-danger'>Hapus</a></td>";
      echo "</td>";
      $no++;
    }
    ?>
  </tbody>
  <p>Total: <?php echo mysqli_num_rows($query) ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

	<script>
		window.print();
	</script>

</body>
</html>