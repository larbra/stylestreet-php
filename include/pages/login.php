	<div class="breadcrumbs">
		<div class="breadcrumbs__text wrap">
			<a href="../../index.html">Главная</a>
			<p>→</p>
			<p>Авторизация</p>
		</div>
	</div>

	<?php
	if (isset($_SESSION['uid'])) {
		echo '<script>document.location.href="?page=profile"</script>';
	}
	$error = '';
	$email = '';
	$password = '';
	$error_email = '';

	if (isset($_POST['signin'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = $conn->query($sql);
		$temp_user = $result->fetch();


		if (empty($email)) {                                       // на пустоту почты
			$error_email = "<p>Введите почту!</p>";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {     // на формат почты
			$error_email = "<p>Неверный формат почты</p>";
		} elseif ($temp_user == false) {                           // есть ли такой пользователь
			$error_temp_user = "<p class='zareg__p'>Такой пользователь не зарегистрирован. <a class='zareg' href='signup.php'>Зарегистрироваться!</a></p>";
		} elseif (empty($password)) {
			$error_password = "<p>введите пароль</p>";
		} elseif (!password_verify($password, $temp_user['password'])) {    // парвильно ли введен пароль
			$error_password = "<p>неверный пароль</p>";
		}

		if (empty($error) && empty($error_email) && empty($error_password) && empty($error_temp_user)) {
			// процесс авторизации
			$_SESSION['uid'] = $temp_user['id'];
			echo '<script>document.location.href="?page=login"</script>';
		}
	}
	?>

	<div class="Authorization">
		<div class="Authorization__content wrap">
			<h2 class="Authorization__title">
				Авторизация
			</h2>
			<div class="Authorization__items">
				<div class="Authorization__item">
					<form action="" class="Authorization__form" method="post" name="signin">
						<p>Email <span>*</span></p>
						<input type="text" placeholder="Введите данные для авторизации" name="email" value="<?= $email ?>">
						<?php if (isset($error_email)) {
							echo $error_email;
						} ?>
						<p>Пароль <span>*</span></p>
						<input type="password" placeholder="Введите пароль от аккаунта " name="password">
						<?php if (isset($error_password)) {
							echo $error_password;
						} ?>
						<input type="submit" value="Войти в кабинет" class="Authorization__form-btn" name="signin">
					</form>
				</div>

				<div class="Authorization__item auth__item-right">
					<img src="media/auth/Vector.png" alt="#">
					<div class="auth_textbox ">
						<p class="auth__title">Еще нет аккаунта?</p>
						<p class="auth__text">Регистрация на сайте позволяет получить доступ к статусу и истории вашего заказа. Просто заполните поля ниже, и вы получите учетную запись. <br>
						</p>
						<p class="auth__text">
							Мы запрашиваем у вас только информацию, необходимую для того, чтобы сделать процесс покупки более быстрым и легким.
						</p>
						<a href="?page=regist" class="auth__btn">Зарегистрироваться</a>
					</div>
				</div>
				<div class="Authorization__item"></div>
			</div>
		</div>
	</div>