<?php
// Load tất cả class Midlleware trong Disk middlewares 
    spl_autoload_register('Loader');
    function Loader($className){
        $path="./mvc/middlewares/";
        $extensions=".php";
        $fullPath=$path.$className.$extensions;
        require_once($fullPath);
    }
?>