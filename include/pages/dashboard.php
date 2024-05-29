<?php
    if($SIGNIN_USER['role'] == 3) {?>
<div class="adm">
    <div class="adml">
        <p class="fs24 nam1"><?=$SIGNIN_USER['name']?> <?=$SIGNIN_USER['name2']?></p>

        <a href="?page=users">Пользователи</a>
        <a href="?page=delred1">Товары</a>
        <a href="?page=create">Добавить товар</a>
        <a href="?page=adminka4">Категории</a>
    </div>

    <div class="admr">
        <p class="asmrp">Панель администратора</p>
    </div>
</div>
<? }else {?>
    echo '<script>document.location.href="?"</script>';

    <?}
    ?>