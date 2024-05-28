<?php

require_once('mysql.php'); // loads $host, $user, $pass, $name

$conn = new mysqli($host, $user, $pass, $name);

$conn->query("INSERT INTO `list` (`item`) VALUES ('" . $conn->real_escape_string($_POST['item']) . "')");

echo $conn->insert_id;