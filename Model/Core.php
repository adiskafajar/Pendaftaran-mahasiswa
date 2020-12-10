<?php 
   abstract class Core 
   {
      private  
         $host = 'localhost',
         $user = 'root',
         $pass = '',
         $name = 'maba';

      private function connect()
      {
         return mysqli_connect($this->host, $this->user, $this->pass, $this->name);
      }

      protected function read()
      {
         $sql = "SELECT * FROM user order by accepted = '?' DESC";
         $query = mysqli_query($this->connect(), $sql);

         while($data = mysqli_fetch_array($query)){
            $read[] = $data;
         }

         return $read;
      }

      protected function readId($id)
      {
         $sql = "SELECT * FROM user WHERE id=$id"; 
         $query = mysqli_query($this->connect(), $sql); 
         $readId = mysqli_fetch_assoc($query);

         if(!$query){
            die("Baka yarou, Kono yarou!!!");
         }

         return $readId;
      }

      protected function readUsername($username)
      {
         $sql = "SELECT * FROM user WHERE username='$username'";
         $query = mysqli_query($this->connect(), $sql); 
         $readUsername = mysqli_fetch_assoc($query);

         if(!$query){
            die("Baka yarou, Kono yarou!!!".$username);
            // mysqli_error($query);
         }

         return $readUsername;
      }

      protected function create($username, $password, $name, $gender, $address, $contact)
      {
         $sql = "INSERT INTO user VALUES('', '$username', '$password', '$name', '$gender', '$address', '$contact', 'maba', '?')";
         $query = mysqli_query($this->connect(), $sql);

         if(!$query) {
            die('shippai desu!!!');
         }
      }

      protected function delete($id)
      {
         $sql = "DELETE FROM user WHERE id=$id";
         $query = mysqli_query($this->connect(), $sql); 

         if(!$query) {
            die('kudaranai!!!');
         }
      }

      protected function update($id, $username, $password, $name, $gender, $address, $contact)
      {
         $sql = "UPDATE user SET
            username ='$username',
            password ='$password',
            name ='$name',
            gender ='$gender',
            address ='$address',
            contact ='$contact'
         WHERE id = $id";

         $query = mysqli_query($this->connect(), $sql); 

         if(!$query){
            die("kusoo!!!!");
         }
      }
      
      Protected function access($access, $id) 
      {
         $sql = "UPDATE user SET accepted='$access' WHERE id=$id";

         $query = mysqli_query($this->connect(), $sql);

         if(!$query){
            die(':v');
         }
      }
   }


