<div class="content-wrapper p-3">
  <section class="content-header">
    <h1><?= isset($news) ? 'Edit Berita' : 'Tambah Berita' ?></h1>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="title" value="<?= isset($news) ? $news->title : '' ?>" required>
          </div>
          <div class="form-group">
            <label>Isi</label>
            <textarea class="form-control" name="content" rows="6" required><?= isset($news) ? $news->content : '' ?></textarea>
          </div>
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('admin/news') ?>" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </section>
</div>
