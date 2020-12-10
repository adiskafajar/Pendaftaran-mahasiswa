<?php 
   require_once 'process.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Maba Pages</title>
   <link rel="stylesheet" href="<?= BOOTSTRAP ?>">
   <link rel="stylesheet" href="<?= FONTAWESOME ?>">
   <script src="<?= SCRIPT ?>"></script>
   <link rel="stylesheet" href="<?= STYLE ?>">
</head>
<body>
   <nav>
      <img src="../../Assets/img/LOGO UTY BARU 1.png" alt="">
      <ul>
         <li><a href="?page=home">Home</a></li>
         <li><a href="?page=profile">Profile</a></li>
         <li><a href="?page=alur">Alur</a></li>
         <li><a href="?page=bantuan">Bantuan</a></li>
         <li><a href="?page=pembayaran">Pembayaran</a></li>
         <li><a href="?page=pengumuman">Pengumuman</a></li>
         <li><a href="?action=logout">Logout</a></li>
      </ul>
   </nav>
   <header></header>

   <section>
   <!-- request from url page -->
      <?php 
         switch($content){
            case 'profile': 
               require_once 'profile.php'; 
               break;
            case 'bantuan': 
               require_once 'bantuan.php'; 
               break;
            case 'pra-reister': 
               require_once 'pra-reister.php';
               break;
            case 'alur': 
               require_once 'alur.php'; 
               break;
            case 'pembayaran': 
               require_once 'pembayaran.php'; 
               break;
            case 'pengumuman': 
               require_once 'pengumuman.php'; 
               break;
            default: 
               require_once 'home.php'; 
               break;
         }
      ?>
   </section>

   <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

      /* config */
      *{
         box-sizing: border-box;
      } body {
         margin: 0;
         padding: 0;
         font-family: 'Roboto', sans-serif;
         background: url(../../Assets/img/back-img.png) no-repeat center center fixed;
         background-size: cover;
      }

      /* nav & head */
      nav{
         height: 90px;
         background-color: white;
         display: flex;
         justify-content: space-between;
         padding: 0 25px;
      } nav img {
         align-self: center;
      } nav ul {
         display: flex;
         align-self: flex-end;
      } nav ul li {
         margin: 0 40px 0 0;
         list-style: none;
      } nav ul li a {
         text-decoration: none;
         color: black;
         font-size: 1.2em;
         font-weight: 700;
      } header {
         height: 50px;
         background-color: #2A2A2A;
         border-bottom: solid 5px #DF1B1D;
      }

      /* main content */
      section {
         height: 85vh;
         display: flex;
         padding: 0 10px;
      }

      /* Home */
      .home {
         height: 80vh;
         display: flex;
         justify-content: center;
         align-items: center;
         flex-direction: column;
         text-align: center;
         margin: auto;
      } .home .title {
         color: #DF1B1D;
         font-size: 70px;
         font-weight: 900;
         margin: 0 0 20px 0;
         -webkit-text-stroke: 3px white;
      } .home .text {
         color: white;
         font-size: 20px;
         font-weight: 700;
      }

      /* Profile */
      .profile {
         width: 1500px;
         height: 90%;
         margin: auto;
         background-color: white;
         display: grid;
         grid-template: "title title" "photo data" 5fr "logo logo" 1fr / 1fr 2fr;
      } .profile .title {
         grid-area: title;
         padding: 10px 40px;
         font-size: 1.2em;
         font-weight: 700;
      } .profile .photo {
         grid-area: photo;
         display: flex;
      } .profile .data {
         grid-area: data;
         place-self: center start;
         width: 900px;
         height: 80%;
         display: grid;
         grid-template: "property value" 1fr / 1fr 1fr;
      } .profile .logo {
         grid-area: logo;
         place-self: end center;
         margin: 0 0 12px 0;
      } .profile .photo img {
         margin: auto;
         border: 10px solid grey;
         transform: scale(1.3);
      } .profile .logo img {
         transform: scale(.8);
      } .profile .data .property {
         grid-area: property;
         align-self: center;
      } .profile .data .value {
         grid-area: value;
         align-self: center;
      }  .profile .data  div {
         padding: 15px;
         font-size: 1.2em;
         font-weight: 700;
      }   .profile .data  div:nth-child(even) {
         background-color: #DAD1D1;
      } .profile .data  div:nth-child(odd) {
         background-color: #F1ECEC;
      }
      /* alur */
      .alur {
         width: 1500px;
         height: 90%;
         margin: auto;
         background-color: white;
         padding: 50px; 
         
      } .alur div {
         text-align: center;
      } .alur div img {
         margin: 0 0 20px 0;
      } .alur .box {
         width: 300px;
      } .alur .satu {
         display: flex;
         justify-content: space-between;
      } .alur .dua {
         display: flex;
         justify-content: space-between;
         /* margin: 0 180px 0 0; */
      }

      /* Bantuan */
      .bantuan {
         width: 1500px;
         height: 90%;
         margin: auto;
         background-color: white;
         text-align: center;
         padding: 60px;
      } .bantuan .logo {
         transform: scale(.8);
      } .bantuan .text {
         font-size: 1.3em;
         font-weight: 700;
         margin-bottom: 130px;
      } .bantuan .email{
         margin-bottom: 250px;
      }

      /* Pembayaran */
      .pembayaran {
         width: 1500px;
         height: 90%;
         margin: auto;
         background-color: white;
         padding: 30px;
      } .pembayaran h3 {
         margin: 0 0 20px 0;
      } .pembayaran .cara {
         padding: 15px;
         background-color: #CECCCC;
         font-weight: 700;
         font-size: 1.1em;
         margin: 0 0 20px 0;
      } .pembayaran .bank {
         padding: 15px;
         background-color: #F3F2F2;
         font-weight: 700;
         font-size: 1.1em;
         margin: 0 0 100px 0;
      } .pembayaran .logo {
         transform: scale(.8);
         text-align: center;
      }
      
      /* Pengumuman */
      .pengumuman {
         width: 1500px;
         height: 90%;
         margin: auto;
         background-color: white;
         padding: 30px;
      } .pengumuman p {
         font-size: 1.3em;
         font-weight: 700;
      } .pengumuman .logo {
         transform: scale(.8);
         text-align: center;
         margin: 250px 0 0 0;
      }
   </style>
</body>
</html>