
  <!-- Page Content -->
  <div class="container">
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
            <input type="text" class="form-control" name="harga_barang" id="harga_barang" readonly value="">
          </div>
          <div class="form-group">
            <label for="jumlah_barang">Jumlah</label>
            <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang"  placeholder="masukan jumlah barang yang ingin dibeli">
          </div>

          <div class="form-group">
            <label for="total_belanja">Total belanja</label>
            <input type="text" class="form-control" name="total_belanja" id="total_belanja" readonly value="">
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

  <script type="text/javascript"> 
      var result = "";
      var string = "";
      $(document).ready(function() {

        $.ajax({ 

            method: "GET", 
            
            url:'<?=base_url()?>belanja/getData',

          }).done(function( data ) { 

          result = Object.values($.parseJSON(data)); 
          result = result[0];
          string += "<option> Pilih Jenis Barang </option>";
          
          $.each( result, function( key, value ) { 
              string += "<option>"+value['nama_barang']+"</option>";
          });

           $("#jenis_barang").html(string); 
        });
      });

      $( "#jenis_barang" ).change(function() {
        var index = $("#jenis_barang").prop('selectedIndex');
        // alert(result[index]['harga_barang']);
        $("#harga_barang").attr("value", result[index-1]['harga_barang']);
      });

      $( "#jumlah_barang" ).change(function() {
        var harga = $("#harga_barang").val();
        var jumlah = $("#jumlah_barang").val();
        var total = harga * jumlah;

        $("#total_belanja").attr("value", total);
      });

        
  </script>

  <link href="<?= base_url();?>assets/css/custom.css" rel="stylesheet">
</body>
</html>
