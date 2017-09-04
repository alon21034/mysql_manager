<?php

  require_once '/home/ubuntu/mysql_manager/dealer_api/util/Db.php';

  $db = new Db;

  $num = rand(1, 10);

  if ($num == 1) {
    // try to delete a row
    $rand = rand(2, 10);
    $sql = sprintf("delete from test_db.test_table where id=%d", $rand);
  } else {
    // try to add a row
    $sql = sprintf("insert into test_db.test_table (data) values ('%d')", $num);
  }
  
  $db -> execute($sql, array());
?>
