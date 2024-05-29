<?php
    try{
        $conn = new PDO ("mysql:host=localhost;dbname=stylestreet",'root','');
    }catch(PDOException $e){
        echo $e;
    }
?>