<?= $this->extend("layouts/default") ?>

<?=  $this->section("title") ?>Articles<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Articles</h1>

    <a href="<?= url_to("Articles::new") ?>">New</a>

    <?php foreach ($articles as $article) : ?>
        <article>
            <h2><a href="<?= site_url('/articles/') . $article["id"]?>"><?= $article["title"] ?></h2>
            <p><?= $article["content"] ?></p>
        </article>
    <?php endforeach; ?>
<?= $this->endSection() ?>