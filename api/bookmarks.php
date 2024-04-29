<?php
  // Initialize session
  session_start();

  // Initialize bookmarks
  if (!isset($_SESSION['bookmarks'])) {
    $_SESSION['bookmarks'] = [];
  }


  if (isset($_POST['id'])) {
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

  $bookmarks = [];
  if (isset($_SESSION['bookmarks'])) {
    $bookmarks = $_SESSION['bookmarks'];
  }
  // Output the data as JSON
  header('Content-Type: application/json');
  echo json_encode($bookmarks);
?>