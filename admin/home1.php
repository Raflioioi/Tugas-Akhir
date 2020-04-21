<html lang="en">
<head>
  <title>ADMIN-NEWS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this tsidebaremplate -->
  <link href="css/navigasi.css" rel="stylesheet">
</head>
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right nav-guru" id="sidebar-wrapper">
      <div class="sidebar-heading">KATEGORI</div>
      <div class="list-group list-group-flush">
        <a href="Beranda.php" class="list-group-item list-group-item-action bg-light">Beranda</a>
        <a href="VIRAL.php" class="list-group-item list-group-item-action bg-light">VIRAL</a>
        <a href="TEKNOLOGI.php" class="list-group-item list-group-item-action bg-light">TEKNOLOGI</a>
        <a href="KULINER.php" class="list-group-item list-group-item-action bg-light">KULINER</a>
        <a href="HIBURAN.php" class="list-group-item list-group-item-action bg-light">HIBURAN</a>
        <a href="OLAHRAGA.php" class="list-group-item list-group-item-action bg-light">OLAHRAGA</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Jenis Berita</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
      </nav>

      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>