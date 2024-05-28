<?php

require_once('mysql.php'); // loads $host, $user, $pass, $name

$conn = new mysqli($host, $user, $pass, $name);

$query = $conn->query("SELECT * FROM `list`");

?>
<!doctype html>
<html>
	<head>
		<title>My List</title>
	</head>
	<body>
		<h1>My List</h1>
		<ul id="my-list">
<?php
while($item = $query->fetch_assoc()) {
	echo "			<li class=\"my-list-item\" id=\"my-list-item-{$item['id']}\" data-id=\"{$item['id']}\">{$item['item']}</li>\n";
}
?>
		</ul>
		<div id="show-form-button">
			<button type="button" id="show-form">Add an Item</button>
		</div>
		<div id="form">
			<form>
				<label for="item">Enter new list item</label>
				<input type="text" name="item" id="item">
				<button type="button" id="add-item">Add Item to List</button>
				<button type="button" id="hide-form">Hide This Form</button>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<script src="list.js"></script>
	</body>
</html>