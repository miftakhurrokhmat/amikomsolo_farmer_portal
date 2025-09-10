<div class="content-wrapper p-3">
  <section class="content-header">
    <h1>Dashboard</h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $news_count ?></h3>
            <p>Total Berita</p>
          </div>
          <div class="icon"><i class="fas fa-newspaper"></i></div>
          <a href="<?= site_url('admin/news') ?>" class="small-box-footer">Kelola Berita <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header"><h3 class="card-title">Log Aktivitas</h3></div>
      <div class="card-body">
        <ul>
          <?php foreach($activity as $log): ?><li><?= $log ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
</div>
