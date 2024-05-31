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
if (isset($_GET['id'])) {
    $get_id = $_GET['id'];
    $sql = "SELECT * FROM stylestreet_tovar WHERE id = '$get_id'";
    $result = $conn->query($sql);
    $stylestreet_tovar = $result->fetch();
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $material = $_POST['material'];
    $category = $_POST['category'];
    $sql = "UPDATE stylestreet_tovar SET `name`='$name',
                                        `description`='$description',
                                        `price`='$price',
                                        `material`='$material',
                                        `category`='$category'
                                        WHERE id = '$get_id'";

    $conn->query($sql);
    echo '<script>document.location.href="?page=tovar&id=' . $get_id . '"</script>';
}

?>

<?php
if (!isset($_SESSION['uid'])) {   //если пользователь не авторизован
    echo '<script>document.location.href="?page=catalog"</script>';
} else {
    if ($SIGNIN_USER['role'] != 2) {  //если пользователь не админ
        echo '<script>document.location.href="?"</script>';
    } else { ?>

        <form method="POST" name="update" class="add__form Authorization__form wrap ">
            <p>Название товара <span>*</span></p>
            <input name="name" type="text" value="<?= $stylestreet_tovar['name'] ?>">
            <p>Описание товара<span>*</span></p>
            <input name="description" type="text" value="<?= $stylestreet_tovar['description'] ?> ">
            <p>Цена товара <span>*</span></p>
            <input name="price" type="text" value="<?= $stylestreet_tovar['price'] ?>">
            <p>Материал <span>*</span></p>
            <input name="material" type="text" value="<?= $stylestreet_tovar['material'] ?>">
            <p>Категория товара <span>*</span></p>
            <input name="category" type="text" value="<?= $stylestreet_tovar['category'] ?> ">
            <input type="submit" value="Добавить товар" class="Authorization__form-btn" name="update">
        </form>

<? }
}
?>