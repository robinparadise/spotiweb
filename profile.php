<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Spoti Web</title>
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
  <div class="container text-center">
    <div class="row">
      <?php foreach ($articles as $item) { ?>
        <!-- card -->
        <div class="col">
          <div class="card" style="width: 18rem;margin:auto">
            <img src="<?= $item['image_url']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $item['title']; ?></h5>
              <p class="card-text"><?= $item['category']; ?></p>
              <a href="#" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <?php include 'components/scripts.php'; ?>
</body>

</html>