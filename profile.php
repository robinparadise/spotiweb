<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'profile' ?>
  <?php include 'components/navbar.php'; ?>
  <div class="container-sm text-center">
    <h1>Spoti <span class="danger">Web</span></h1>
    <p>Read the latest news from around the world!</p>
  </div>

  <!-- Grid + card + getNews -->

  <?php 
    $articles = getPostNews();
  ?>

  <!-- grid -->
  <?php include 'components/grid.php'; ?>
  <?php include 'components/modal.php'; ?>

  <div class="flex text-center m-4">
    <button onclick="generatePDF()" type="button" class="btn btn-primary">Generate PDF</button>
  </div>

  <?php include 'components/scripts.php'; ?>
</body>

</html>