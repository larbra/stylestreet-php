<div class="breadcrumbs">
	<div class="breadcrumbs__text wrap">
		<a href="?">Главная</a>
		<p>→</p>
		<p>Каталог</p>
	</div>
</div>
<div class="catalog">
	<div class="catalog__content wrap">
		<h2 class="catalog__title">
			Каталог
		</h2>
		<div class="catalog__filter">
			<?php
			if (isset($_SESSION['uid'])) {
				if ($SIGNIN_USER['role'] == 2) { ?>
					<div class="catalog__filter-item">
						<a href="?page=add" class="filter-text">Добавить товар</a>
					</div>
				<? } else { ?>
					
			<? }
			}
			?>

			<div class="catalog__filter-item">
				<p>Сортировка</p>
				<select name="" id="">
					<option value="">По убыванию</option>
					<option value="">По возрастанию</option>
				</select>

			</div>
		</div>

		<div class="receipts__items catalog__items">
			<?php
			$sql = "SELECT * FROM stylestreet_tovar";
			$result = $conn->query($sql);


			foreach ($result as $stylestreet_tovar) { ?>
				<div class="receipts__item">
					<div class="receipts__item-header">
						<button class="receipts-btn">Новинка</button>
						<a href="#"><img src="media/receipts/In favorites.svg" alt="#" class="receipts-icon"></a>
					</div>
					<div class="receipts__item-main">
						<img src="media/receipts/Rectangle 4.png" alt="#" class="receipts-main-img">
						<img src="media/receipts/Frame 25.svg" alt="#">
					</div>
					<div class="receipts__item-info">
						<div class="receipts__item-info-text">
							<h3 class="receipts-item-title"><?= $stylestreet_tovar['category'] ?></h3>
							<a class="receipts-item-model" href="?page=tovar&id=<?= $stylestreet_tovar['id'] ?>"><?= $stylestreet_tovar['name'] ?></a>

							<p class="receipts-item-price"><?= $stylestreet_tovar['price'] ?> ₽ <span>11 699 ₽</span></p>
						</div>
						<a href="#" class="receipts-icon"><img src="media/receipts/Added to cart.svg" alt="#"></a>
					</div>
				</div>
			<? }
			?>
		</div>
		<div class="transition">
			<div class="transition__content wrap">
				<a href="" class="transition__link transition__link-active">1</a>
				<a href="" class="transition__link">2</a>
				<a href="" class="transition__link">3</a>
				<a href="" class="transition__link">4</a>
				<a href="" class="transition__link">5</a>
			</div>

		</div>
	</div>
</div>