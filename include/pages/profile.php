
<?php
    if(!isset($_SESSION['uid'])){
        echo '<script>document.location.href="?"</script>';
    }    
    
?>

<div class="acc">
    <h1>Профиль</h1>
    <p>Ваше имя: <?=$SIGNIN_USER['name']?></p>
    <p>Ваша почта: <?=$SIGNIN_USER['email']?></p>   
    <p>Ваша роль: <?=$SIGNIN_USER['role']?></p>   
</div>