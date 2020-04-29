<?php

namespace Dev;


class Debug
{
  public $propertyName;
  static $server_arr = [
    "HTTP_HOST",
    "SERVER_NAME",
    "REQUEST_SCHEME",
    "HTTP_USER_AGENT",
    "DOCUMENT_ROOT",
    "SCRIPT_FILENAME",
    "PHP_SELF",
    "SCRIPT_NAME",
    "REQUEST_METHOD",
    "REQUEST_URI",
    "QUERY_STRING",
    "REDIRECT_URL",
  ];
  static public function pre($func, $obj)
  {
    echo '<pre>';
    // $func($obj);
    call_user_func($func, $obj);
    echo '</pre>';
  }
  static public function vd($obj)
  {
    self::pre('var_dump', $obj);
  }
  static public function print($obj)
  {
    self::pre('print_r', $obj);
  }
  static public function server()
  {
    echo '<br>$_SERVER:';
    echo '<table>';
    foreach (self::$server_arr as $value) {
      echo "<tr><td>[$value]</td><td> => </td><td>$_SERVER[$value]</td></tr>";
    }
    echo '</table><br>';
    \debug_print_backtrace();
  }
}


// echo $_SERVER["HTTP_HOST"];
// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER["HTTP_USER_AGENT"];
// echo $_SERVER["DOCUMENT_ROOT"];
// echo $_SERVER["SCRIPT_FILENAME"];
// echo $_SERVER["REDIRECT_URL"];
// echo $_SERVER["REQUEST_METHOD"];
// echo $_SERVER["REQUEST_URI"];
// echo $_SERVER["QUERY_STRING"];
// echo $_SERVER["PHP_SELF"];
// echo $_SERVER["SCRIPT_NAME"];
