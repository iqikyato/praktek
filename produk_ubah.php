<?php  
      $id = $_GET['id'];
      if(isset($_POST['nama_produk'])) {
      $nama_produk = $_POST['nama_produk'];
      $harga = $_POST['harga'];
      $stok = $_POST['stok'];
      $query = mysqli_query($koneksi, "UPDATE produk set nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id_produk=$id");
      if($query) {
      echo '<script>alert("Ubah data berhasil")</script>';
      }else{
      echo '<script>alert("Ubah data gagal"></script>';
      }
      }
      $query = mysqli_query($koneksi, "SELECT*FROM produk WHERE id_produk=$id");
      $data  = mysqli_fetch_array($query);  

?>


        <div class="container-fluid">
                        <h1 class="mt-4">produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">produk</li>
                        </ol>
                        <a href="?page=produk" class ="btn btn-danger">Kembali</a>
                       <hr>

                       <form method="post">
                        <table class="table table-bordered">
                        <tr>
                        <td width="200">Nama produk</td>
                        <td width="1">:</td>
                        <td><input class="form-control" value ="<?php echo $data['nama_produk'];?>" type="text" name="nama_produk"></td>
                        </tr>

                       
                        <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" value = "<?php echo $data['harga'];?>" step="0" name="harga"></td>
                        </tr>

                         <tr>
                        <td>Stok</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" step="0" value ="<?php echo $data['stok'];?>" name="stok"></td>
                        </tr>

                        <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </td>
                        </tr>
                        </table>
                        </form>






                            </div>