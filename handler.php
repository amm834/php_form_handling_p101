<?php

// check request method
if (!$_POST) {
  header("Location:index.html");
  exit();
}

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $colors = $_POST['colors'];
  $images = $_FILES['images'];

  echo "<h1>Your Imformation</h1>";
  echo "Your name is $username <br>";
  echo "Your Password is $password <br>";
  echo "Your gender is $gender <br>";
  echo "You love ";
  foreach ($colors as $color) {
    echo "$color,";
  }

  foreach ($images['tmp_name'] as $index => $tmp_file_path) {
    move_uploaded_file($tmp_file_path,
    "imgs/".$images['name'][$index]
    );
  }



}