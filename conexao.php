<?php

$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'aula';

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_errno) {
    die("Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
