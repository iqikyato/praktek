        <div class="container-fluid">
                        <h1 class="mt-4">Pendataan Barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pendataan Barang</li>
                        </ol>
                        <a href="?page=detail_tambah" class ="btn btn-primary">+ Tambah Data</a>
                        <hr>
                        <table class="table table-bordered">
                        <tr>

                        <th>ID Detail</th>
                        <th>ID Penjual</th>
                        <th>ID Produk</th>
                        <th>Jumlah Produk</th>
                        <th>SubTotal</th>
                        <th>Aksi</th>
                        </tr>

                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM detail_penjualan");
                        while($data = mysqli_fetch_array($query)){
                        ?>

                        <tr>

                        <td><?php echo $data['id_detail']; ?></td>
                        <td><?php echo $data['id_penjualan']; ?></td>
                        <td><?php echo $data['id_produk']; ?></td>
                         <td><?php echo $data['jumlah_produk']; ?></td>
                          <td><?php echo $data['subtotal']; ?></td>
                        <td>
                        <a href="?page=penjual_ubah&&id_detail=<?php echo $data['id_detail']; ?>" class="btn btn-secondary">Ubah</a>
                        <a href="?page=penjual_hapus&&id_detail=<?php echo $data['id_detail']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>

                        </table>    

                            </div>
