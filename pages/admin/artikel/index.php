<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
  <a href="?page=artikel&act=tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
    ><i class="fas fa-download fa-sm text-white-50"></i> Tambah Artikel</a
  >
</div>
<!-- Content Row -->
<div class="row">
  <div class="col">
    <div class="card shadow">
      <table class="table table-striped table">
        <thead>
          <tr class='text-center'>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Artikel</th>
            <th scope="col">Foto</th>
            <th scope="col">Penulis</th>
            <th scope="col">Dibuat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT artikel.*, user.nama FROM  artikel LEFT JOIN user ON user.id=artikel.penulis";
            $sql = mysqli_query($koneksi, $query);
            if (mysqli_num_rows($sql) > 0) {
                $items = mysqli_fetch_all($sql, MYSQLI_ASSOC);
                foreach($items as $item) {
                    ?>
                    <tr>
                        <td class='align-middle text-center' scope="row"><?= $item['id'] ?></td>
                        <td class='align-middle'><?= $item['judul'] ?></td>
                        <td class='align-middle text-truncate inline-block' style='max-width: 150px'><?= $item['artikel'] ?></td>
                        <td class='align-middle text-center'>
                            <img style='width:80px;height:80px;object-fit:cover' src="/uploads/<?= $item['foto'] ?>" alt=""
                        </td>
                        <td class='align-middle text-center'><?= $item['nama'] ?></td>
                        <td class='align-middle text-center'><?= $item['created_at'] ?></td>
                        <td class='align-middle text-center'>
                            <a href="?page=artikel&act=ubah&id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick='fungsi_delete("artikel", <?= $item["id"]?>)'>Delete</button>
                        </td>
                    </tr>    
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td class='text-center' colspan='7'>Tidak ada data</td>
                </tr>
                <?php
            }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Delete Data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data akan dihapus.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id='btnDelete' class="btn btn-danger" href='#'>Hapus</a>
            </div>
        </div>
    </div>
</div>