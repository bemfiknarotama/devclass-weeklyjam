<?php 
$id = @$_GET['id'];
$query = "SELECT id FROM artikel WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);
if (mysqli_num_rows($sql) > 0) {
    $query = "DELETE FROM artikel WHERE id=?";
    $sql = $koneksi->prepare($query);
    $sql->bind_param('s', $id);
    if ($sql->execute()) {
        echo "<script>alert('Sukses menghapus');window.location.href='?page=artikel'</script>";
    } else {
        echo "<script>alert('Tidak ada data artikel');window.location.href='?page=artikel'</script>";
    }
}
?>