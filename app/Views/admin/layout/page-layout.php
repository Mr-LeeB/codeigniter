<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
    <title>
        <?= $title ?>
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

    <?= $this->renderSection('headscript') ?>

    <?= $this->renderSection('stylesheet') ?>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php include('inc/sidebar.php') ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <?php include('inc/navbar.php') ?>
        <div class="container-fluid py-2">
            <?= $this->renderSection('contents') ?>
            <?php include('inc/footer.php') ?>
        </div>
    </main>
    <?php include('inc/fixed-plugin.php') ?>

    <?= $this->renderSection('scripts') ?>
</body>

</html>