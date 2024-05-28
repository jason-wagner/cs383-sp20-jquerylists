<?php

require_once('mysql.php'); // loads $host, $user, $pass, $name

$conn = new mysqli($host, $user, $pass, $name);

$conn->query("DELETE FROM `list` WHERE `id` = {$_POST['id']}");