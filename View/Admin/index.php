<?php 
   require_once 'process.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="<?= eaea ?>">
   <link rel="stylesheet" href="<?= FONTAWESOME ?>">
   <script src="<?= SCRIPT ?>"></script>
</head>
<body class="pt-5">
   <div class="container-lg pt-3">
      <!-- Title -->
      <h1 class="text-center mb-5"><?= $title ?></h1>

      <!-- CRUD request from URL "page" -->
      <?php 
         switch($content){
            case "info_data" : 
               require_once "info.php";
               break;
            case "create" : 
               require_once "create.php";
               break;
            case "update" : 
               require_once "update.php";
               break;
            case "delete" : 
               require_once "read.php";
               break;
            default: 
               require_once "read.php";
               break;
         }
      ?>
   </div>

   <style>
   </style>
</body>
</html>