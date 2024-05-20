<?php
include 'config.php';
// Initialize session
session_start();

// Initialize bookmarks
if (!isset($_SESSION['bookmarks'])) {
  $_SESSION['bookmarks'] = [];
}


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

// Count articles
function countArticles() {
  $conn = connectDB();
  $sql = "SELECT COUNT(*) as total FROM articles";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($result);
  return $data['total'];
}

// Count Bookmarks
function countBookmarks() {
  return count($_SESSION['bookmarks']);
}

// Array categories + values
function getCategories() {
  $conn = connectDB();
  $sql = "SELECT DISTINCT category, count(*) as total FROM articles GROUP BY category";
  $result = mysqli_query($conn, $sql);
  $categories = [];
  $total = [];
  while ($data = mysqli_fetch_assoc($result)) {
    $categories[] = $data['category'];
    $total[] = $data['total'];
  }
  return [
    'labels' => $categories,
    'series' => $total
  ];
}
