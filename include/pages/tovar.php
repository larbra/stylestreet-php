<?php
if (isset($_GET['id'])) {
	$get_id = $_GET['id'];
	$sql = "SELECT * FROM stylestreet_tovar WHERE id = '$get_id'";
	$result = $conn->query($sql);
	$stylestreet_tovar = $result->fetch();
}
?>
<div class="breadcrumbs">
	<div class="breadcrumbs__text wrap">
		<a href="?">Главная</a>
		<p>→</p>
		<a href="?page=catalog">Каталог</a>
		<p>→</p>
		<p>Товар</p>
	</div>
</div>
<div class="tovar">
	<div class="tovar__content wrap">
		<div class="tovar__items">
			<div class="tovar__item">
				<img src="media/tovar/tovar.png" alt="#" class="tovar__img">
			</div>
			<div class="tovar__item">
				<p class="tovar__title">
					Кроссовки <?= $stylestreet_tovar['name'] ?>
				</p>
				<p class="tovar__subtitle">
					<?= $stylestreet_tovar['description'] ?>
				</p>
				<p class="tovar__pol">
					Категория: <?= $stylestreet_tovar['category'] ?>
				</p>
				<p class="tovar__mater">
					Материал: <?= $stylestreet_tovar['material'] ?>
				</p>
				<p class="tovar__price">
					<?= $stylestreet_tovar['price'] ?> ₽
				</p>
				<a class="tovar__btn" href="?page=basket">
					Добавить в корзину
				</a>
				<?php
				if (isset($_SESSION['uid'])) {
					if ($SIGNIN_USER['role'] == 2) { ?>
						<a class="tovar__btn" href="?page=redact&id=<?= $get_id ?>">
							Редактировать
						</a>
						<a class="tovar__btn" href="?page=del&id=<?= $get_id ?>">
							Удалить
						</a>
					<? } else { ?>

				<? }
				}
				?>

			</div>
		</div>
	</div>
</div>