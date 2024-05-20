<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Charts</title>
  <?php include 'components/head.php'; ?>
</head>

<body>
  <?php $page = 'charts' ?>
  <?php include 'components/navbar.php'; ?>
  <div class="container-sm text-center">
    <h1>Spoti <span class="danger">Web</span></h1>
  </div>

  <!-- Grid + card + getNews -->
  <div class="container">
    <h2>Bar Chart</h2>
    <div class="ct-chart-1"></div>
    <?php
      $id = '.ct-chart-1';
      $labels = ['Posts', 'Bookmarks'];
      $series = [[
        countArticles(),
        countBookmarks()
      ]];
      $options = [];
    ?>
    <?php include 'components/chart-bar.php'; ?>
  </div>

  <div class="container">
    <h2>Line Chart</h2>
    <div class="ct-chart-2"></div>
    <?php
      $id = '.ct-chart-2';
      $labels = ['A', 'B', 'C', 'D', 'E'];
      $series = [[
        5, 4, 3, 7, 6
      ]];
      $options = [];
    ?>
    <?php include 'components/chart-line.php'; ?>
  </div>

  <div class="container">
    <h2>Pie Chart</h2>
    <div class="ct-chart-pie"></div>
    <?php
      $id = '.ct-chart-pie';
      $categories = getCategories();
      $labels = $categories["labels"];
      $series = $categories["series"];
      // axisX.offset
      $options = [
        'donut' => false,
        'startAngle' => 0
      ];
    ?>
    <?php include 'components/chart-pie.php'; ?>
  </div>


  <!-- grid -->
  <?php include 'components/grid.php'; ?>
  <?php include 'components/modal.php'; ?>
  <?php include 'components/scripts.php'; ?>
</body>

</html>