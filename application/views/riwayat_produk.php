
  <!-- Page Content -->
  <div class="container default-container">
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
