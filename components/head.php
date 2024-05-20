<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="assets/styles.css">
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Chartist -->
<!-- Include Chartist CSS/Js  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<script src="https://codeyellowbv.github.io/chartist-plugin-legend/chartist-plugin-legend.js"></script>


<?php
if (false && isset($_POST['bookmarks'])) {
  $id = $_POST['id'];
  // check if id is in array
  if (!in_array($id, $_SESSION['bookmarks'])) { // Add $id
    $_SESSION['bookmarks'][] = intval($id); // append
    $_SESSION['bookmarks'] = array_unique($_SESSION['bookmarks']);
  } else { // Delete $id
    $index = array_search($id, $_SESSION['bookmarks']);
    unset($_SESSION['bookmarks'][$index]);
    $_SESSION['bookmarks'] = array_values($_SESSION['bookmarks']);
  }
}
?>