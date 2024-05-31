<?php
if (!isset($_SESSION['uid'])) {
    echo '<script>document.location.href="?"</script>';
}

?>
<div class="breadcrumbs">
    <div class="breadcrumbs__text wrap">
        <a href="?">Главная</a>
        <p>→</p>
        <p>Профиль</p>
    </div>
</div>
<div class="acc wrap">
    <h2 class="catalog__title">
        Профиль
    </h2>
    <div class="profile__content">
        <img src="media/profile/user.png" alt="" class="profile-img">
        <div class="profile__info">
            <p>Ваше имя: <?= $SIGNIN_USER['first_name'] ?></p>
            <p>Ваша почта: <?= $SIGNIN_USER['email'] ?></p>
            <?php
            if (isset($_SESSION['uid'])) {
                if ($SIGNIN_USER['role'] == 2) { ?>
                    <p>Ваша роль: <a class="admin-text" href="?page=dashboard">Администратор</a></p>
                    <? } else { ?> <? }
            }
              

            ?>
        </div>
    </div>

</div>