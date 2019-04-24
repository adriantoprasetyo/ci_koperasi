<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url();?>icon.png" />


  <title>Aplikasi Koperasi PeTIK</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>vendor_asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="padding-top: 56px;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url();?>">
        <img src="<?= base_url();?>icon.png" style="width: 35px; height: 35px;">
        Aplikasi Koperasi PeTIK
      </a>
      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container py-5">
    
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead class="text-white bg-info">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Harga Barang</th>
              <th scope="col">Stok Barang</th>
            </tr>
          </thead>
          <tbody>              
            <?php $count = 1; ?>
            <?php foreach($data as $value){ ?>
            <tr>
              <th scope="row"> <?= $count ?> </th>
              <td><?= $value->nama_barang ?></td>
              <td><?= $value->harga_barang ?></td>
              <td><?= $value->stok_barang ?></td>
            </tr>
            <?php $count++ ?>
            <?php } ?>
          </tbody>
        </table>        
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Pesantren Teknologi Informasi dan Komunikasi 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url();?>vendor_asset/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>vendor_asset/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
