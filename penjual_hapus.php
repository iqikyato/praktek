<?php
$id_detail = $_GET['id_detail'];
$query = mysqli_query($koneksi, "DELETE FROM detail_penjualan WHERE id_detail=$id_detail");
if($query) {
echo '<script>alert("Hapus data berhasil"); location.href="?page=detail_penjualan"</script>';
}else{

echo '<script>alert("Hapus data gagal")</script>';
}