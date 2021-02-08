<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
</div>
<?php
    $post = @$_POST;
    $error = ['display' => 'd-none', 'type' => 'danger', 'msg' => ''];

    if (isset($post['submit'])) {
        if (empty($post['judul'])) {
            $error = ['display' => '', 'type' => 'danger', 'msg' => 'Judul tidak boleh kosong'];
        } elseif (empty($post['artikel'])) {
            $error = ['display' => '', 'type' => 'danger', 'msg' => 'Isi artikel tidak boleh kosong'];
        } else {
            $error = ['display' => 'd-none', 'type' => 'danger', 'msg' => ''];

            $judul = $post['judul'];
            $artikel = $post['artikel'];
            $id_user = $cek['id'];
            $nama_foto = null;
            $uploadOk = true;
            if (!empty($_FILES['foto']['name']))  {
                $folder = '../../uploads/';
                $fileType = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
                $nama_foto = date('dmYHis') . '.' . $fileType;
                $file = $folder . $nama_foto;
                $is_foto = getimagesize($_FILES['foto']['tmp_name']);
                
                if ($is_foto) {
                    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $file)) {
                        $uploadOk = false;
                        $error = ['display' => '', 'type' => 'danger', 'msg' => 'Gagal mengupload foto'];
                    }
                } else {
                    $uploadOk = false;
                    $error = ['display' => '', 'type' => 'danger', 'msg' => 'File bukan foto'];
                }
            }

            if ($uploadOk) {
                $query = "INSERT INTO artikel (judul, artikel, foto, penulis) VALUES (?, ?, ?, ?)";
                $sql = $koneksi->prepare($query);
                $sql->bind_param("ssss", $judul, $artikel, $nama_foto, $id_user);
                if ($sql->execute()) {
                    $error = ['display' => '', 'type' => 'success', 'msg' => 'Artikel berhasil dipublish'];
                    $post = [];
                } else {
                    $error = ['display' => '', 'type' => 'danger', 'msg' => 'Gagal membuat artikel'];
                }
            }
        }
    }
?>
<div class="alert alert-<?=$error['type'] ?> <?= $error['display'] ?>" role="alert">
   <?= $error['msg'] ?>
</div>
<!-- Content Row -->
<div class="row">
  <div class="col">
    <div class="card shadow p-4">
      <form method='POST' action='' enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul artikel" value="<?= @$post['judul'] ?>">
        </div>
        <div class="form-group">
            <label for="artikel">Isi Artikel</label>
            <textarea class="form-control" id="artikel" name="artikel" rows="5"><?= @$post['artikel'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="foto">Foto Thumbnail</label>
            <input type="file" class="form-control-file" id="foto" name="foto" accept='image/x-png,image/gif,image/jpeg'>
        </div>
        <div>
            <a href="?page=artikel" class="btn btn-secondary">Kembali</a>
            <button type="submit" name='submit' class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
  </div>
</div>