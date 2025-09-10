<div class="content-wrapper p-3">
  <section class="content-header">
    <h1><?= $title ?></h1>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <a href="<?= site_url('admin/news/create') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Berita</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead><tr><th>Judul</th><th>Tanggal</th><th width="150">Aksi</th></tr></thead>
          <tbody>
            <?php foreach($news as $row): ?>
            <tr>
              <td><?= $row->title ?></td>
              <td><?= date('d-m-Y H:i', strtotime($row->created_at)) ?></td>
              <td>
                <a href="<?= site_url('admin/news/edit/'.$row->id) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                <a href="<?= site_url('admin/news/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus berita ini?')"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
