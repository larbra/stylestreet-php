	<div class="breadcrumbs">
		<div class="breadcrumbs__text wrap">
			<a href="?">Главная</a>
			<p>→</p>
			<p>Регистрация</p>
		</div>
	</div>
	<?php

	$error = '';
	$first_name = '';
	$email = '';
	$password = '';
	$password_repeat = '';
	$role = '1';
	if (isset($_POST['signup'])) {
		$first_name = $_POST['first_name'];
		$email  = $_POST['email'];
		$password  = $_POST['password'];
		$password_repeat = $_POST['password_repeat'];

		//проверка на пустоту имени
		if ($first_name === '') {
			$error_first_name = '<p class="p_errors">Введите имя!</p>';
		}
		//проверка на минимум символов в имени
		else if (strlen($first_name) < 2) {
			$error_first_name = '<p class="p_errors">Имя должно состоять минимум из 2 букв!</p>';
		}

		//проверка на пустоту в почте
		if ($email === '') {
			$error_email = '<p class="p_errors">Введите почту!</p>';
		}
		//проверка на формат почты
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$error_email = '<p class="p_errors">Неверный формат почты!</p>';
		}
		// проверка на уникальность почты
		$sql = "SELECT count(*) FROM users WHERE email = '$email'";
		$user_count = $conn->query($sql)->fetchColumn();

		if ($user_count != 0) {
			$error .= '<div class="error">Вы уже зарегистрированы</div>';
		}
		//проверка на пустоту в пароле

		if ($password === '') {
			$error_password = '<p class="p_errors">Введите пароль!</p>';
		} else if (strlen($password) < 6) {
			$error_password = '<p class="p_errors">Минимальное количество символов в пароле - 6!</p>';
		}

		//проверка на пустоту в подтверждении пароля
		if ($password !== $password_repeat) {
			$error_password_repeat = '<p class="p_errors">Пароли не совпадают!</p>';
		}




		//проверка паролей(пустота, колво символов, одинаковость...)

		if (empty($error_first_name) && empty($error_email) && empty($error_password) && empty($error_password_repeat) && empty($error)) {

			//шифрование пароля
			$hash_password = password_hash($password, PASSWORD_DEFAULT);


			$sql = "INSERT INTO users (`first_name`, `email`, `password`,`role`)
                VALUES ('$first_name', '$email', '$hash_password','$role')";
			$conn->query($sql);
			echo '<script>document.location.href="?page=login"</script>';
		}
	} ?>
	<div class="Authorization regist">
		<div class="Authorization__content wrap">
			<h2 class="Authorization__title">
				Регистрация
			</h2>
			<div class="regist__items">
				<div class="Authorization__item">
					<form action="" class="Authorization__form" method="post" name="signup">
						<p>Email <span>*</span></p>
						<input type="email" placeholder="Введите email адрес" value="<?= $email ?>" name="email">
						<?php
						if (isset($error_email)) {
							echo $error_email;
						}
						?>
						<p>Как вас зовут <span>*</span></p>
						<input type="text" placeholder="Введите имя " name="first_name" value="<?= $first_name ?>">
						<?php
						if (isset($error_first_name)) {
							echo $error_first_name;
						}
						?>
						
						<p>Пароль <span>*</span></p>
						<input type="password" placeholder="Придумайте пароль " name="password">
						<?php
						if (isset($error_password)) {
							echo $error_password;
						}
						?>
						<p>Повторите пароль <span>*</span></p>
						<input type="password" placeholder="Повторите пароль " name="password_repeat">
						<?php
						if (isset($error_password_repeat)) {
							echo $error_password_repeat;
						}
						?>
						<input type="submit" value="Создать аккаунт" class="Authorization__form-btn" name="signup">
						<?= $error ?>
					</form>
				</div>

				<div class="Authorization__item auth__item-right">
					<img src="media/auth/Vector.png" alt="#">
					<div class="auth_textbox ">
						<p class="auth__title">Уже есть аккаунт?</p>
						<p class="auth__text">Перейдите к авторизации если у вас уже есть зарегистрированный <br> аккаунт.
						</p>
						<a href="?page=login" class="auth__btn">Авторизоваться</a>
					</div>
				</div>
				<div class="Authorization__item"></div>
			</div>
		</div>
	</div>