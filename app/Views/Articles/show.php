<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1><?= $article["title"] ?></h1>

<p><?= $article["content"] ?></p>

<?= $this->endSection() ?>