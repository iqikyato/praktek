<?php
      if(isset($_POST['nama_produk'])) {
      $nama_produk = $_POST['nama_produk'];
      $harga = $_POST['harga'];
      $stok = $_POST['stok'];
      $query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, stok) values('$nama_produk','$harga','$stok')");
      if($query) {
      echo '<script>alert("Tambah data berhasil")</script>';
      }else{
      echo '<script>alert("Tambah data gagal"></script>';
      }
      }
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
                        
                        <td><input class="form-control" type="text" name="nama_produk"></td>
                        </tr>

                       
                        <tr>
                        <td>Harga</td>
                        
                        <td><input class="form-control" type="number" step="0" name="harga"></td>
                        </tr>

                         <tr>
                        <td>Stok</td>
                        
                        <td><input class="form-control" type="number" step="0" name="stok"></td>
                        </tr>

                        <tr>
                        
                        <td>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        </td>
                        </tr>
                        </table>
                        </form>






                            </div>