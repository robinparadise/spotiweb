<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>SpotiWeb</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'index' ?>
  <?php include 'components/navbar.php'; ?>
  <div class="container-sm text-center">
    <h1>Spoti <span class="danger">Web</span></h1>
    <p>Read the latest news from around the world!</p>
  </div>

  <!-- Grid + card + getNews -->

  <?php 
    $articles = getNews();

    echo "bookmarks: ";
    echo implode(",", $_SESSION['bookmarks']);
  ?>

  <!-- grid -->
  <?php include 'components/grid.php'; ?>
  <?php include 'components/modal.php'; ?>
  <?php include 'components/scripts.php'; ?>
</body>

</html>