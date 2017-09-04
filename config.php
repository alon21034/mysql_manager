<?php

$config_file = '/opt/db_config.ini';

$config = parse_ini_file($config_file);

$master_db_host = $config['master_db_host'];
$master_db_username = $config['master_db_username'];
$master_db_password = $config['master_db_password'];

$replication_db_host = $config['replication_db_host'];
$replication_db_username = $config['replication_db_username'];
$replication_db_password = $config['replication_db_password'];

$slave_db_host = $config['slave_db_host'];
$slave_db_username = $config['slave_db_username'];
$slave_db_password = $config['slave_db_password'];

?>
