<?php 
    try{
        $conn = new PDO("mysql:host=localhost;dbname=x665",'x665', 'iT3MRYLhAs87HCZM');
    }catch(PDOException $e){
    echo $e;
    }
?>