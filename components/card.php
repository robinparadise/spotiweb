<?php
  $active = false;
  if ($_SESSION['bookmarks']) {
    $active = in_array($item['id'], $_SESSION['bookmarks']);
  }
?>

<div class="card" style="width: 18rem;margin:auto">
  <img src="<?= $item['image_url']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
      <?= $item['title']; ?>
    </h5>
    <p class="card-text">
      <?= $item['category']; ?>
    </p>
    <div style="display:inline-flex;align-items: center;">
      <button id="btnModal" type="button" modal-title="<?= $item['title']; ?>"
        modal-img="<?= $item['image_url']; ?>" modal-description="<?= $item['description']; ?>"
        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
        More
      </button>
      <!-- <i class="fa-solid fa-bookmark"></i> -->
      <form
        class="bookmark-form"
        method="post"
        action="/spotiweb/api/bookmarks.php">
        <input type="hidden" name="id" value="<?= $item['id']; ?>">
        <button type="submit" name="bookmarks" value="Add to Cart" class="border-0 mx-2">
          <i class="fa-bookmark <?= $active ? "fa-solid" : "fa-regular"; ?>"></i>
        </button>
      </form>
    </div>

  </div>
</div>