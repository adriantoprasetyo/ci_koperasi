
  <!-- Page Content -->
  <div class="container">
      <div class="row my-5">
        <table class="table">
        <thead class="text-light bg-info">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Stok Barang</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $value) { ?>
            <tr>
              <th scope="row">1</th>
              <td><?= $value->nama_barang ?></td>
              <td><?= $value->harga_barang ?></td>
              <td><?= $value->stok_barang ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
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

  <link href="<?= base_url();?>assets/css/custom.css" rel="stylesheet">
</body>
</html>
