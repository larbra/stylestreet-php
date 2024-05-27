<?php

if (isset($_GET['id'])) {
    $get_id = $_GET['id'];
    $sql = "SELECT * FROM stylestreet_tovar WHERE id = '$get_id'";
    $result = $conn->query($sql);
    $stylestreet_tovar = $result->fetch();
}

if (isset($_GET['delete'])) {
    $sql = "DELETE FROM stylestreet_tovar WHERE id = '$get_id' ";
    $conn->query($sql);
    echo '<script>document.location.href="?page=catalog"</script>';
}
?>
<div class="del__page wrap">
    <h1 class=" del__h1">Вы хотите удалить товар:</h1>
    <a href="?page=del&id=<?=$get_id ?>&delete" class="">Да</a>
    <a href="?page=tovar&id=<?= $get_id ?>" class="">Нет</a>
</div>