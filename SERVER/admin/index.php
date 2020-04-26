<?php

$db_filename = './db/db.json';
// $db_content = json_decode(fread($db, filesize($db_filename)), TRUE);
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['save'] === 'save') {
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST) {
  $db = fopen($db_filename, 'w');
  $db_new_content = json_encode($_POST);
  fwrite($db, $db_new_content);
  fclose($db);
}

$db_content = json_decode(file_get_contents($db_filename), TRUE);

// echo '<pre style="text-align: left;">';
// var_dump($db_content);
// echo '</pre>';

if (!empty($_GET)) {
  echo '<pre style="text-align: left;">';
  var_dump($_GET);
  echo '</pre>';
}

require_once './app/home.php';
