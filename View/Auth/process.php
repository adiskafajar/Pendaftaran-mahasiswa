<?php
   session_start(); 
   require_once '../../init.php'; 

   // session
   if(isset($_SESSION['admin'])){
      header('location:'.ADMIN);
   } elseif(isset($_SESSION['maba'])){
      header('location:'.MABA);
   }

   // instansiasi class Auth
   $auth = new Auth();

   // variable 
   $content = (isset($_GET['page'])) ? $_GET['page'] : null;
   $action = (isset($_GET['action'])) ? $_GET['action'] : null;
   $flash = (isset($_SESSION['flash'])) ? $_SESSION['flash'] : null;
   $title = ($_GET['page'] == 'register') ? 'REGISTER' : 'LOGIN';
   
   // call Auth method
   switch($action){
      case 'login': 
         $auth->login($_POST);
         break;
      case 'register': 
         $auth->register($_POST);
         break;
   }