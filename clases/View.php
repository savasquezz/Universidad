<?php

class View{
    
    public static function loadPage($path, $data = []){
        extract($data);   //every key now is a variable :)
        require './' . BASE_VIEWS . "/include/header.php";  
        require "./" . BASE_VIEWS . "/$path.php";
         require './' . BASE_VIEWS . "/include/footer.php";
    }
     public static function load($path, $data = []){
        extract($data);   //every key now is a variable :)
        require "./" . BASE_VIEWS . "/$path.php";
    }
     public static function loadLibrary($path){
        require_once "./" . BASE_LIBS . "/$path.php";
    }
    
        
}