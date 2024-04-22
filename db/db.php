<?php
include 'config.php';
// Initialize session
session_start();

// Initialize bookmarks
// if (!isset($_SESSION['bookmarks'])) {
  $_SESSION['bookmarks'] = [810, 811, 812];
// }


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

function getBookmarks() {
  $conn = connectDB();
  $ids = implode(",", $_SESSION['bookmarks']); // 2,3,4
  $sql = "SELECT * FROM articles WHERE id IN ($ids)";
  $result = mysqli_query($conn, $sql);
  return $result;
}