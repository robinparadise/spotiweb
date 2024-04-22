<div class="card" style="width: 18rem;margin:auto">
  <img src="<?= $item['image_url']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
      <?= $item['title']; ?>
    </h5>
    <p class="card-text">
      <?= $item['category']; ?>
    </p>
    <button id="btnModal" type="button" modal-title="<?= $item['title']; ?>"
      modal-img="<?= $item['image_url']; ?>" modal-description="<?= $item['description']; ?>"
      class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
      More
    </button>
    <i class="fa-regular fa-bookmark"></i>
    <i class="fa-solid fa-bookmark"></i>
  </div>
</div>