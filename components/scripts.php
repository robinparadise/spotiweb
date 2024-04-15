<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


<script>
  /* Tabs event */
  const triggerTabList = document.querySelectorAll('#tab a')
  triggerTabList.forEach(function (triggerEl) {
    const tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', function (event) {
      event.preventDefault()
      tabTrigger.show()
    })
  })

  /* Modal */
  const myModal = document.getElementById('myModal')
  myModal.addEventListener('shown.bs.modal', (event, other) => {
    // actualizar el title, description, image_url
    const modalTitle = document.querySelector('.modal-title')
    modalTitle.innerHTML = 'Prueba cambio title'

    const modalImg = document.querySelector('.modal-img')
    modalImg.src = "https://picsum.photos/536/354"

    const modalDescription = document.querySelector('.modal-description')
    modalDescription.innerHTML = 'Vinyl office sub-orbital tube sprawl dome car stimulate face forwards motion. Face forwards disposable man spook digital military-grade fluidity range-rover augmented reality hacker. Sprawl drone dead bridge shoes sub-orbital-space tower artisanal. Crypto-hacker geodesic order-flow dome katana vinyl neural concrete knife stimulate artisanal.'
  })

</script>