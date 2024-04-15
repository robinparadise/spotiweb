<?php include 'components/navbar.php'; ?>

<h1>Pruebas 8 abr</h1>
<?php
  $name = "John";
  $age = 25;

  // Your PHP code goes here
  echo "Hello, $name!</br>";
  print("Age: $age");

  $fruits = ["apple", "banana", "cherry"];

  echo "<br>==========================<br>";

  for ($i = 0; $i < 5; $i++) {
    echo $i;
  }

  echo "<br>==========================<br>";

  foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
  }

  echo "<br>==========================<br>";

  function greet($name) {
    echo "Hello, $name!";
  }
  
  greet("Alice");

  echo "<br>==========================<br>";

  echo "<br>============FETCH==============<br>";
  
?>

<script>
  fetch('fruits.php').then(response => response.json())
    .then(fruits => {
      console.log(fruits);
    })
</script>