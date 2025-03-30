<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?= $this->include('template/header'); ?>
    <?= $this->include('template/hero'); ?>
    <hr>
    <p><?= $content; ?></p>
    <?= $this->include('template/footer'); ?>
</body>

</html>