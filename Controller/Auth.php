<?php 
   class Auth extends Core
   {
      public function login($data)
      {
         $username = $data['username'];
         $password = $data['password'];
         $admin = ADMIN;
         $maba = MABA;
         $login = LOGIN;

         $data = $this->readUsername($username);

         if(!$data){
            $_SESSION['flash'] = 'username';
            header("location:$login");
         } else {
            if($data['password'] != $password){
               $_SESSION['flash'] = 'password';
               header("location:$login");
            } else { 
               if($data['accepted'] == '0'){
                  $_SESSION['flash'] = 'rejected';
                  header("location:$login");
               } elseif($data['accepted'] == '?'){
                  $_SESSION['flash'] = 'process';
                  header("location:$login");
               } else{
                  if($data['role'] == 'admin'){
                     $_SESSION['admin'] = true;
                     header("location:$admin");
                  } else {
                     $_SESSION['maba'] = $data['id'];
                     header("location:$maba");
                  }
               }
            }
         }
      }

      public function register($data)
      {
         $username = $data['username'];
         $password = $data['password'];
         $name = $data['name'];
         $gender = $data['gender'];
         $address = $data['address'];
         $contact = $data['contact'];
         $login = LOGIN;

         $this->create($username, $password, $name, $gender, $address, $contact);

         $_SESSION['flash'] = 'register';
         header("location:$login");
      }
   }
