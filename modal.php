<?php include 'db/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Spoti Web</title>
  <?php include 'components/head.php'; ?>
</head>

<body>

  <!-- Button trigger modal -->
  <button id="btnModal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Launch static backdrop modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">...</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img class="modal-img" src="..." style="width: 100%;">
          <p class="modal-description">...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/scripts.php'; ?>

</body>
</html>