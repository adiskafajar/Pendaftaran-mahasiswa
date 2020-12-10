
   <form action="process.php?action=login" method="post" class="login">
      <?php 
         if($flash) {
            Helper::flash($flash);
         }
      ?>
      <div class="body">         
         <?php 
            Helper::form('input', 'text', 'username', 'Username', null, null); 
            Helper::form('input', 'password', 'password', 'Password', null, null); 
         ?>
      </div>

      <div class="action">
         <input type="submit" class="btn" value="Login">
      </div>
   </form>
