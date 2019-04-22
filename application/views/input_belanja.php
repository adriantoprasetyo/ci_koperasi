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

   <link href="<?= base_url();?>assets/css/custom.css" rel="stylesheet">

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
  <div class="container">
      <div class="row my-5">
        <div class="col-lg-6 offset-lg-3">
        <form action="belanja/simpan_belanja" method="POST">
          <div class="form-group">
            <label for="jenis_barang">Jenis Barang</label>
            <select class="form-control" name="jenis_barang">
              <?php foreach($data as $value){ ?>
                <option>
                  <?= $value->nama_barang ?>
              </option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jumlah</label>
            <input type="text" class="form-control" name="jumlah_barang"  placeholder="masukan jumlah barang yang ingin dibeli">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Total belanja</label>
            <input type="text" class="form-control" name="total_belanja" placeholder="masukan total belanja">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer-stick py-5 bg-dark">
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
