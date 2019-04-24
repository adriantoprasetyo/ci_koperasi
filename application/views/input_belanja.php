
  <!-- Page Content -->
  <div class="container default-container">
      <div class="row my-5">
        <div class="col-lg-6 offset-lg-3">
        <form action="belanja/simpan_belanja" method="POST">
          <div class="form-group">
            <label for="jenis_barang">Jenis Barang</label>
            <select class="form-control" name="jenis_barang" id="jenis_barang">
            </select>
          </div>
          <div class="form-group">
            <label for="harga_barang">Harga</label>
            <input type="text" class="form-control" name="harga_barang" id="harga_barang" readonly>
          </div>
          <div class="form-group">
            <label for="jumlah_barang">Jumlah</label>
            <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang"  placeholder="masukan jumlah barang yang ingin dibeli">
          </div>

          <div class="form-group">
            <label for="total_belanja">Total belanja</label>
            <input type="text" class="form-control" name="total_belanja" id="total_belanja" readonly>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container -->

  <script type="text/javascript"> 
      var string = "";
      var result = <?= $data ?>;
      // console.log(result);

      var jenis_barang = document.getElementById("jenis_barang");
      var harga_barang = document.getElementById("harga_barang");
      var jumlah_barang = document.getElementById("jumlah_barang");
      var total_belanja = document.getElementById("total_belanja");

      string += "<option> Pilih jenis barang </option>";

      for(value in result){
        string += "<option>"+ result[value].nama_barang +"</option>";
      }
      
      jenis_barang.innerHTML = string;
      
      jenis_barang.addEventListener('change', (event) => {
        harga_barang.value = result[jenis_barang.selectedIndex-1].harga_barang;
      });

      jumlah_barang.addEventListener('change', (event) =>{
        total_belanja.value = jumlah_barang.value * harga_barang.value;
      });
        
  </script>
