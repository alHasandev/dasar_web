<?php

// mengikutkan file helper.php
include "config/helper.php";

// mengikutkan file koneksi.php
include "config/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dasar Web</title>
    <link rel="stylesheet" href="<?= base_url('asset') ?>/style.css">
</head>

<body>

    <!-- akhir header -->

    <!-- disini akan tampil halaman -->
    <?php

    // menampilkan halaman sesuai dengan url
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        require_once "halaman/$page.php";
    } else {
        require_once "halaman/index.php";
    }

    ?>
    <!-- akhir halaman -->

    <!-- bagian footer -->
</body>

</html>