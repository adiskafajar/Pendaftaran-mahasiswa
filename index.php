<?php 
   session_start();
   require_once 'init.php'; 

   if(isset($_SESSION['admin'])){
      header('location:'.ADMIN);
   } elseif(isset($_SESSION['maba'])){
      header('location:'.MABA);
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Landing Page</title>
</head>
<body>
   <nav>
      <img src="Assets/img/LOGO UTY BARU 1.png" alt="">
   </nav>
   <header></header>
   <div class="content">
      <span class="text1">Registrasi Mahasiswa Baru</span>
      <span class="text2">Registrasi Online Bagi Mahasiswa D3, S1 baru Universitas Teknologi Yogyakarta</span>
      <a href="<?= LOGIN ?>" class="btn login">Login</a>
      <a href="<?= REGISTER ?>" class="btn register">Register</a>
   </div>

   <style>
      /* config */
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
      *{
         box-sizing: border-box;
      }body{
         padding: 0;
         margin: 0;
         background: url('Assets/img/back-img.png') no-repeat center center fixed;
         background-size: cover;
         font-family: 'Roboto', sans-serif;
         text-align: center;
      }

      /* nav */
      nav{
         display: flex;
         align-items: center;
         height: 90px;
         background-color: white;
         padding: 0 25px;
      }
      header{
         height: 50px;
         background-color: #2A2A2A;
         border-bottom: solid 5px #DF1B1D;
         
      }

      /* content */
      .content{
         height: 80vh;
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         /* background-color: red; */
         margin: 0 0 10px 1px 0;
      }.content .text1{
         color: #DF1B1D;
         font-size: 70px;
         font-weight: 900;
         display: inline;
         margin: 0 0 20px 0;
         -webkit-text-stroke: 3px white;
      }.content .text2{
         color: white;
         display: inline;
         font-size: 20px;
         font-weight: 700;
         margin: 0 0 20px 0;
      }.btn{
         display: block;
         padding: 10px 30px;
         margin: 20px 0 0 0;
         border-radius: 30px;
         border:white solid 2px;
         color: white;
         font-size: 23px;
         text-decoration: none;
      }.login{
         background-color: #F5B100;
         padding: 10px 42px;
      }.register{
         background-color: #DF1B1D;
      }


      @media screen and (max-width: 1800px){
      }
   </style>
</body>
</html>