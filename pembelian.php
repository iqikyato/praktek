        <div class="container-fluid">
                        <h1 class="mt-4">Detail Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Detail Produk</li>
                        </ol>
                        <a href="cetak.php" class ="btn btn-primary"> Cetak</a>
                        <hr>
                        <table class="table table-bordered">
                        <tr>

                        <th>IdProduk</th>
                        <th>Nama Produk</th>
                        <th>harga</th>
                        <th>Stok</th>
                        </tr>

                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM produk");
                        while($data = mysqli_fetch_array($query)){
                        ?>

                        <tr>

                        <td><?php echo $data['id_produk']; ?></td>
                        <td><?php echo $data['nama_produk']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['stok']; ?></td>
                        <td>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>

                        </table>

                            </div>