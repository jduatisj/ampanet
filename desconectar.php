<?php
   session_start();
   $path = './usr/lib/etc';
   set_include_path(get_include_path() . PATH_SEPARATOR . $path);
   $_SESSION["Usuari"]="";
   header('location:index.php');
   die();
?>   

 