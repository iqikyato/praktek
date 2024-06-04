<?php
      if(isset($_POST['id_detail'])) {
      $id_detail = $_POST['id_detail'];
      $id_penjualan = $_POST['id_penjualan'];
      $id_produk = $_POST['id_produk'];
      $jumlah_produk = $_POST['jumlah_produk'];
      $subtotal = $_POST['subtotal'];

      $query = mysqli_query($koneksi, "INSERT INTO detail_penjualan (id_detail, id_penjualan, id_produk, jumlah_produk, subtotal) values('$id_detail','$id_penjualan','$id_produk','$jumlah_produk','$subtotal')");

      if($query) {
      echo '<script>alert("Ubah data berhasil")</script>';
      }else{
      echo '<script>alert("Ubah data gagal"></script>';
      }
      }

      $query = mysqli_query($koneksi, "SELECT*FROM detail_penjualan ");
      $data  = mysqli_fetch_array($query);  

?>


        <div class="container-fluid">
                        <h1 class="mt-4">detail_penjualan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">detail_penjualan</li>
                        </ol>
                        <a href="?page=detail_penjualan" class ="btn btn-danger">Kembali</a>
                       <hr>

                       <form method="post">
                        <table class="table table-bordered">
                        <tr>
                        <td width="200">ID Detail</td>
                        <td width="1">:</td>
                        <td><input class="form-control" value = "<?php echo $data['id_detail'];?>"type="text" name="id_detail"></td>
                        </tr>

                        <tr>
                        <td>id_penjualan</td>
                        <td>:</td>
                        <td>
                        <textarea name="id_penjualan" rows="5" class="form-control"><?php echo $data['id_penjualan'];?></textarea>
                        </td>
                        </tr>

                        <tr>
                        <td>id_produk</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" step="0" value = "<?php echo $data['id_produk']; ?>" name="id_produk"></td>
                        </tr>

                         <tr>
                        <td>jumlah_produk</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" step="0" value = "<?php echo $data['jumlah_produk']; ?>" name="jumlah_produk"></td>
                        </tr>


                         <tr>
                        <td>subtotal</td>
                        <td>:</td>
                        <td><input class="form-control" type="number" step="0" value = "<?php echo $data['subtotal']; ?>" name="subtotal"></td>
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