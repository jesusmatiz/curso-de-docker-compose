<?php
$mysqli = new mysqli("mariadb_host", "root", "Custom.2020", "custom_db");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br/>";

$mysqli = new mysqli("mariadb_host", "root", "Custom.2020", "custom_db", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "<br/>";