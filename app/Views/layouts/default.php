<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title") ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <?php if (session()->has("message")): ?>
        <p><?= session("message") ?></p>
    <?php endif; ?>
    <?= $this->renderSection("content") ?>
</body>
</html>