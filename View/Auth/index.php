<?php 
   require_once 'process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Auth</title>
   <link rel="stylesheet" href="<?= FONTAWESOME ?>">
   <script src="<?= SCRIPT ?>"></script>   
</head>
<body>
   <!-- nav & head -->
   <nav>
      <img src="<?= IMAGE ?>LOGO UTY BARU 1.png" alt="">
      <a href="<?= BASEURL ?>">Home</a>
   </nav>
   <header>
      <span><?= $title ?></span>
   </header>

   <!-- request from URL "page" -->
   <?php 
      switch($content){
         case "register": 
            require_once 'register.php';
            break;
         case "login" : 
            require_once 'login.php';
            break;
      }
   ?>

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
      
      /* config */
      *{
         box-sizing: border-box;
      }
      body{
         padding: 0 ;
         margin: 0;
         font-family: 'Roboto', sans-serif;
         background: url(../../Assets/img/back-img.png) no-repeat center center fixed;
         background-size: cover;
      }

      /* Nav & Head */
      nav{
         height: 90px;
         background-color: white;
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 0 25px;
      }nav a{
         text-decoration: none;
         color: #2A2A2A;
         font-weight: bold;
         font-size: 1.2em;
      }header{
         height: 100px;
         background-color: #2A2A2A;
         border-bottom: solid 5px #DF1B1D;
         display: flex;
      }header span{
         color: white;
         font-size: 40px;
         margin: auto;
         font-weight: 700;
      }

      /* Auth Style */
      .login, .register {
         max-width: 1000px;
         height: 400px;
         background-color: rgba(255, 255, 255, 0.823);
         border: 1px solid grey;
         border-radius: 18px;
         display: grid;
         grid-template: "flash" 1.1fr "body" 3fr "action" 1fr / 1fr;
         margin: 15vh auto;
      } .login .alert {
         width: 450px;
         place-self: center;
         text-align: center;
         padding: 20px;
         color: black;
      } .body {
         grid-area: body;
         display: flex;
         flex-direction: column;
         justify-content: start;
         align-items: center;
      } .action {
         grid-area: action;
         display: flex;       
      } input[type=text], input[type=password] {
         width: 450px;
         height: 50px;
         border: 0;
         outline: none;
         font-size: 20px;
         padding: 0 0 0 14px;
         margin: 18px;
      } input[type=submit] {
         width: 180px;
         height: 55px;
         border: 0;
         margin: 0 auto;
         border: 2px solid white;
         border-radius: 30px;
         background-color: #F5B100;
         color: white;
         font-size: 2em;
         cursor: pointer;
      } input:focus::placeholder {
         opacity: 0;
      } .warning {
         background-color: rgba(255, 222, 173, 0.5);
         border: 5px solid navajowhite;
      } .danger {
         background-color: rgba(220, 20, 60, 0.5);
         border: 5px solid crimson;
      } .success {
         background-color: rgba(128, 255, 0, 0.5);
         border: 5px solid chartreuse;
      }

      /* register style */
      .register{
         height: 600px;
         margin: 9vh auto;
      } .register form .action {
         margin: 50px 0 0 0;
      } .register form input[type=submit] {
         background-color: #3FE131;
      } .radio {
         display: flex;
      } input[type=radio] {
         border: 0;
         height: 20px;
         width: 20px;
         
      } .form-check {
         margin: 10px 30px 0 0;
      }
   </style>
   
   <script>
   
   </script>
</body>
</html>