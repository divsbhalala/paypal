<?php

define("DB_HOST", "mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/");
define("DB_USERNAME", "adminiKgSKKd");
define("DB_PASSWORD", "PHJB4ZupNhG4");
define("DB_DATABASE", "paypal");



$connect = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die("Database Connection Error");
mysql_select_db(DB_DATABASE) or ("Database Selection Error");
?>
