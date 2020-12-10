<div class="register">
   <form action="process.php?action=register" method="post">
         <div class="body">
            <?php 
               Helper::form('input', 'text', 'username', 'Username', null, null); 
               Helper::form('input', 'password', 'password', 'Password', null, null); 
               Helper::form('input', 'text', 'name', 'Name', null, null); 
               Helper::form('input', 'text', 'address', 'Address', null, null); 
               Helper::form('input', 'text', 'contact', 'Contact', null, null); 
            ?>
            <div class="radio">
               <?php 
                  Helper::form('radio', 'radio', 'gender', 'Man', 'man', null);
                  Helper::form('radio', 'radio', 'gender', 'Woman', 'woman', null);                  
               ?>
            </div>
      </div>

      <div class="action">
         <input type="submit" class="btn btn-primary" value="Register">
      </div>
   </form>
</div>