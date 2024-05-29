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
// if (isset($_POST['create'])) {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     $price = $_POST['price'];
//     $material = $_POST['material'];
//     $category = $_POST['category'];
//     $sql = "INSERT INTO stylestreet_tovar (`name`,`description`,`price`,`material`,`category`)
//                                             VALUES('$name','$description','$price','$material','$category')";
//     $conn->query($sql);
//     echo '<script>document.location.href="?page=catalog"</script>';
// }
$error = '';
$name = '';
$description = '';
$price = '';
$material = '';
$category = '';
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $material = $_POST['material'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    //проверка на пустоту имени
    if ($name === '') {
        $error_name = '<p class="p_errors">Введите Название!</p>';
    }

    if ($description === '') {
        $error_description = '<p class="p_errors">Введите описание!</p>';
    }

    if ($material === '') {
        $error_material = '<p class="p_errors">Введите материал!</p>';
    }

    if ($category === '') {
        $error_category = '<p class="p_errors">Введите категорию!</p>';
    }

    if ($price === '') {
        $error_price = '<p class="p_errors">Введите цену!</p>';
    }



    if (empty($error_name) && empty($error_description) && empty($error_material) && empty($error_category) && empty($error_price) && empty($error)) {

        $sql = "INSERT INTO stylestreet_tovar (`name`,`description`,`price`,`material`,`category`)
        VALUES('$name','$description','$price','$material','$category')";
        $conn->query($sql);
        echo '<script>document.location.href="?page=catalog"</script>';
        ;
    }
}
// проверки для ограниченных фнкций
if (!isset($_SESSION['uid'])) {   //если пользователь не авторизован
    echo '<script>document.location.href="?page=catalog"</script>';
} else {
    if ($SIGNIN_USER['role'] != 2) {  //если пользователь не админ
        echo '<script>document.location.href="?"</script>';
    } else { ?>

        <form method="POST" name="create" class="add__form Authorization__form wrap ">
            <p>Название товара <span>*</span></p>
            <input name="name" type="text" placeholder="Введите название товара">
            <?php
            if (isset($error_name)) {
                echo "$error_name";
            }
            ?>
            <p>Описание товара<span>*</span></p>
            <input name="description" type="text" placeholder="Введите описание товара ">
            <?php
            if (isset($error_description)) {
                echo $error_description;
            }
            ?>
            <p>Цена товара <span>*</span></p>
            <input name="price" type="text" placeholder="Введите цену товара">
            <?php
            if (isset($error_price)) {
                echo $error_price;
            }
            ?>
            <p>Материал <span>*</span></p>
            <input name="material" type="text" placeholder="Введите материал товара">
            <?php
            if (isset($error_material)) {
                echo $error_material;
            }
            ?>
            <p>Категория товара <span>*</span></p>
            <input name="category" type="text" placeholder="Введите категорию товара ">
            <?php
            if (isset($error_category)) {
                echo $error_category;
            }
            ?>
            <input type="submit" value="Добавить товар" class="Authorization__form-btn" name="create">
            <?= $error ?>
        </form>

    <? }
}
?>

