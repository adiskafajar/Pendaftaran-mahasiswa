<?php

   class Admin extends Core
   {
      public function readData()
      {
         return $this->read();
      }

      public function infoData($id)
      {
         return $this->readId($id);
      }

      public function createData($data)
      {
         $username = $data['username'];
         $password = $data['password'];
         $name = $data['name'];
         $gender = $data['gender'] ;
         $address = $data['address'];
         $contact = $data['contact'];

         $this->create($username, $password, $name, $gender, $address, $contact);
         session_start();
         $_SESSION['flash'] = $name;
         header("location:index.php?success=ea");
      }
      
      public function deleteData($id)
      {
         $this->delete($id);
         header("location:index.php?page=delete");
      }

      public function editData($id)
      {
         return $this->readId($id);
      }

      public function updateData($data)
      {
         $id = $data['id'];
         $username = $data['username'];
         $password = $data['password'];
         $name = $data['name'];
         $gender = $data['gender'] ;
         $address = $data['address'];
         $contact = $data['contact'];

         $this->update($id, $username, $password, $name, $gender, $address, $contact);
         header("location:index.php?page=edit");
      }

      public function giveAccess($access, $id)
      {
         $this->access($access, $id);
         header("location:index.php?page=process");
      }
   }