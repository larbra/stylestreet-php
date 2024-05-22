<?php
include('./include/connect.php');
include("./include/session.php");
?>

<?php
session_start();
if (isset($_SESSION['id'])) {
	$USER_ID = $_SESSION['id'];
	$sql = "SELECT * FROM users WHERE id='$USER_ID'";
	$result = $conn->query($sql);
	$SIGNIN_USER = $result->fetch();
}
if (isset($_GET['do'])) {
	if ($_GET['do'] == 'exit') {
		session_unset();
		echo '<script>document.location.href="?"</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Style Street</title>

	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="media/logo/logo.png" type="image/x-icon">
</head>

<body>

	<?php
	include('./include/header.php');
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if ($page == 'catalog') {
			include('./include/pages/catalog.php');
		}
		if ($page == 'about') {
			include('./include/pages/about.php');
		}
		if ($page == 'delivery') {
			include('./include/pages/delivery.php');
		}
		if ($page == 'order') {
			include('./include/pages/order.php');
		}
		if ($page == 'basket') {
			include('./include/pages/basket.php');
		}
		if ($page == 'favourites') {
			include('./include/pages/favourites.php');
		}
		if ($page == 'tovar') {
			include('./include/pages/tovar.php');
		}
		if ($page == 'login') {
			include('./include/pages/login.php');
		}
		if ($page == 'regist') {
			include('./include/pages/regist.php');
		}
		if ($page == 'add') {
			include('./include/pages/add.php');
		}
		if ($page == 'redact') {
			include('./include/pages/redact.php');
		}
		if ($page == 'del') {
			include('./include/pages/del.php');
		}
	} else include('./include/pages/start.php');
	include('./include/footer.php');
	?>



	<script src="script/script.js"></script>
</body>

</html>