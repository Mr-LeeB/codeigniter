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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    <?= $title ?>
  </title>
  
  <?= $this->renderSection('headscript') ?>

  <?= $this->renderSection('stylesheet') ?>
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <?= $this->renderSection('contents') ?>
  </main>
  
  <?= $this->renderSection('scripts') ?>
</body>

</html>