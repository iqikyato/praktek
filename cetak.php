<!DOCTYPE html>
<html>
<head>
 <title> Cetak laporan PDF </title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: skyblue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
               <tr>
               <th>id_produk</th>
                <th>nama_produk</th>
                <th>harga</th>
                <th>stok</th>
                
 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","ukk_kasir");

 // menampilkan data 
 $data = mysqli_query($koneksi,"select * from produk");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id_produk'] ?></td>
 <td><?php echo $d['nama_produk']; ?></td>
 <td><?php echo $d['harga']; ?></td>
 <td><?php echo $d['stok']; ?></td>

 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>