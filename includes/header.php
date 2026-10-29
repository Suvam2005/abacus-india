<?php require_once __DIR__ . '/../config/paths.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIP Abacus</title>
  <!-- Global CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/navbar.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/global.css">
  <!-- Page-specific CSS -->
  <?php if (!empty($PAGE_CSS)): ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/<?= $PAGE_CSS ?>">
  <?php endif; ?>
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css">
</head>
<body>