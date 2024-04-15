<?php
include 'config.php';

function getNews($category = null) {
  $conn = connectDB();
  if ($category) {
    $sql = "SELECT * FROM articles WHERE category = '$category'";
  } else {
    $sql = "SELECT * FROM articles";
  }
  $result = mysqli_query($conn, $sql);
  return $result;
}

function getPostNews() {
  $conn = connectDB();
  $sql = "SELECT * FROM articles LIMIT 3";
  $result = mysqli_query($conn, $sql);
  return $result;
}