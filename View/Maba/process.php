<?php 
   session_start();
   require_once '../../init.php';

   if(!$_SESSION['maba']){
      header('location:'.BASEURL);
   }
   // instansiasi class Admin
   $maba = new Maba();

   // variable 
   $action = (isset($_GET['action']) ? $_GET['action'] : null);
   $content = (isset($_GET['page']) ? $_GET['page'] : null);

   // Call Method Maba
   $data = $maba->readData($_SESSION['maba']);

   switch($action){
      case'logout': 
         $_SESSION = [];
         session_unset();
         session_destroy();
         header('location:'.BASEURL);
         exit;
         break;
   }
   
