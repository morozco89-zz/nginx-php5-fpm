<?php
$conn_string = "host=172.17.0.3 port=5432 dbname=postgres user=postgres password=";
$dbconn4 = pg_connect($conn_string);
var_dump($dbconn4);
