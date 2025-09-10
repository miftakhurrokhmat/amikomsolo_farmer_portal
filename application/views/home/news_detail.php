<!DOCTYPE html>
<html>

<head>
    <title><?= $news_detail['title']; ?></title>
</head>

<body>
    <h1><?= $news_detail['title']; ?></h1>
    <p><em><?= $news_detail['created_at']; ?></em></p>
    <div>
        <?= $news_detail['content']; ?>
    </div>

    <a href="<?= site_url('home'); ?>">← Back to News List</a>
</body>

</html>