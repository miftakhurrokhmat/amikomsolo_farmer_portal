<div class="content-wrapper p-3">
  <section class="content-header"><h1><?= $title ?></h1></section>
  <section class="content">
    <div class="card"><div class="card-body">
      <form action="" method="post">
        <div class="form-group"><label>Alamat</label><input type="text" name="alamat" class="form-control" value="<?= $content['alamat'] ?? '' ?>"></div>
        <div class="form-group"><label>Telepon</label><input type="text" name="telepon" class="form-control" value="<?= $content['telepon'] ?? '' ?>"></div>
        <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control" value="<?= $content['email'] ?? '' ?>"></div>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
    </div></div>
  </section>
</div>
