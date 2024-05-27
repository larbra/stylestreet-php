<div class="breadcrumbs">
	<div class="breadcrumbs__text wrap">
		<a href="?">Главная</a>
		<p>→</p>
		<a href="?page=catalog">Каталог</a>
		<p>→</p>
		<p>Добавить товар</p>
	</div>
</div>

<?php 
if (isset($_POST['create'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $material = $_POST['material'];
    $category = $_POST['category'];
    $sql = "INSERT INTO stylestreet_tovar (`name`,`description`,`price`,`material`,`category`)
                                            VALUES('$name','$description','$price','$material','$category')";
    $conn->query($sql);
    echo'<script>document.location.href="?page=catalog"</script>';
}

?>


<form method="POST" name="create" class="add__form Authorization__form wrap ">
    <p>Название товара <span>*</span></p>
    <input name="name" type="text" placeholder="Введите название товара">
    <p>Описание товара<span>*</span></p>
    <input name="description" type="text" placeholder="Введите описание товара ">
    <p>Цена товара <span>*</span></p>
    <input name="price" type="text" placeholder="Введите цену товара">
    <p>Материал <span>*</span></p>
    <input name="material" type="text" placeholder="Введите материал товара">
    <p>Категория товара <span>*</span></p>
    <input name="category" type="text" placeholder="Введите категорию товара ">
    <input type="submit" value="Добавить товар" class="Authorization__form-btn" name="create">
</form>