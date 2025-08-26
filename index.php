<?php
include __DIR__ . '/src/bootstrap.php';
include __DIR__ . '/src/route.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title><?= $title ?></title>
    <meta name='test' content='test' charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='icon' href='public/images/favicon.ico' type='image/ico'> -->
    <link rel='preload' href='public/css/style.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel='stylesheet' href='public/css/style.css'>
    </noscript>
</head>
<body>
    <?= $content ?>
    <script defer type='text/javascript' src='public/js/script.js'></script>
</body>
</html>