<?php

// if ($_SERVER['REQUEST_URI'] == '/admin/') {
//   header("Location: /admin/admin.php");
//   exit;
// }

if (!empty($_GET)) {
  echo '<pre style="text-align: left;">';
  var_dump($_GET);
  echo '</pre>';
}


require_once './app/home.php';
