<?php
try{
    $baglan = new PDO("mysql:host=localhost:3307;dbname=webproje", "root", "12345678");
}
catch (PDOException $e){
    echo "Bir hata olustu: ". $e->getMessage();
}

?>