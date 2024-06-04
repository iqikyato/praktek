<?php
      if(isset($_POST['id_detail'])) {
      $id_detail = $_POST['id_detail'];
      $id_penjualan = $_POST['id_penjualan'];
      $id_produk = $_POST['id_produk'];
      $jumlah_produk = $_POST['jumlah_produk'];
      $subtotal = $_POST['subtotal'];
      $query = mysqli_query($koneksi, "INSERT INTO detail_penjualan (id_detail, id_penjualan, id_produk, jumlah_produk,subtotal) values('$id_detail','$id_penjualan','$id_produk','$jumlah_produk','$subtotal')");
      if($query) {
      echo '<script>alert("Tambah data berhasil")</script>';
      }else{
      echo '<script>alert("Tambah data gagal"></script>';
      }
      }
?>


        <div class="container-fluid">
                        <h1 class="mt-4">Tambah Data </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambah Data </li>
                        </ol>
                        <a href="?page=detail_penjualan" class ="btn btn-danger">Kembali</a>
                       <hr>

                       <form method="post">
                        <table class="table table-bordered">
                        <tr>
                        <td width="200">id_detail </td>
                        
                        <td><input class="form-control" type="text" name="id_detail"></td>
                        </tr>

                        <tr>
                        <td>id_penjualan</td>
                        
                        <td>
                        <textarea name="id_penjualan" rows="5" class="form-control"></textarea>
                        </td>
                        </tr>

                         <tr>
                        <td>id_produk</td>
                       
                        <td>
                        <textarea name="id_produk" rows="5" class="form-control"></textarea>
                        </td>
                        </tr>

             <tr>
                        <td>jumlah_produk</td>
                        
                        <td>
                        <textarea name="jumlah_produk" rows="5" class="form-control"></textarea>
                        </td>
                        </tr>

                        <td>subtotal</td>
                        
                        <td>
                        <textarea name="subtotal" rows="5" class="form-control"></textarea>
                        </td>
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