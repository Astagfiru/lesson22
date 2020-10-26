<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "", "lesson22");
		$text_zapros = "DELETE FROM contacts WHERE id = '9'";
		mysqli_query($connect, $text_zapros);
	?>
</body>
</html>