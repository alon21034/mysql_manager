<?php

class Log {  

  function __construct() {
    static $log_file = "/tmp/db_service_log.log";
    if (file_exists($log_file)) {
      echo "file exists";
    } else {
      echo "file not exists";
    }
  }

  public static function d($str) {
    echo "$str\n";
  }

}


?>
