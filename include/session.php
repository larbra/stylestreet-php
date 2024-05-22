<?php   
    // Конетроллер авторизации
    session_start();                        //старт сессии
    if(isset($_SESSION['id'])){            //если пользователь авторизован
        $USER_ID = $_SESSION['id'];        //глобальная ID авторизованноно ппользователя
        $sql = "SELECT * FROM users WHERE id='$USER_ID'";
        $result = $conn->query($sql);
        $SIGNIN_USER = $result->fetch();    //глобальная инф-я авторизованного пользователя 
    }
    if(isset($_GET['do'])){                 //если нажата кнопка выйти
        if($_GET['do'] == 'exit'){
            session_unset();                //сбросс сессии
            echo '<script>document.location.href="?"</script>';
        }
    }
?>