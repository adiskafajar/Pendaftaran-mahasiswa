<?php 
   require_once '../../init.php';
   
   // session
   session_start();
   if(!$_SESSION['admin']){
      header('location:'.BASEURL);
   }
   
   // instansiasi class Admin
   $admin = new Admin();

   // variable 
   $action = null;
   $title = null;
   $content = (isset($_GET['page'])) ? $_GET['page'] : null;
   $id = (isset($_GET['id'])) ? $_GET['id'] : null;
   $action = (isset($_GET['action'])) ? $action = $_GET['action'] : null;
   $flash = (isset($_SESSION['flash']) ? $_SESSION['flash'] : null);
   $status = ($content == 'edit' || $content == 'delete' || $content == 'process' || $content == 'process' || $content == 'info') ? 'Action' : 'Status';

   // title conditional
   switch($content){
      case 'info_data':
         $title = 'PROFILE DATA';
         break;
      case 'create':
         $title = 'CREATE DATA';
         break;
      case 'delete': 
         $title = 'DELETE DATA';
         break;
      case 'update' && 'edit': 
         $title = 'UPDATE DATA';
         break;
      default : 
         $title = 'MANAGE DATA'; 
         break;
   }

   // Call Method Admin 
   switch($action){
      case 'info': 
         $data = $admin->infoData($id);
         break;
      case 'create':
         $admin->createData($_POST);
         break;
      case 'delete': 
         $admin->deleteData($id);
         break;
      case 'edit':
         $data = $admin->editData($id);
         $gender = $data['gender'] == 'man';
         $man = ($gender) ? 'checked' : null;
         $woman = (!$gender) ? 'checked' : null;
         break;
      case 'update': 
         $admin->updateData($_POST);
         break;
      case 'accepted':  
         $admin->giveAccess('1', $id);
         break;
      case 'rejected': 
         $admin->giveAccess('0', $id);
         break;
      case 'logout': 
         $_SESSION = [];
         session_unset();
         session_destroy();
         header('location:'.BASEURL);
         break;
      default: 
         $datas = $admin->readData();
         break;
   }