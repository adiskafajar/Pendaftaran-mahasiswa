<form action="process.php?action=create" method="post" class="card mx-auto p-3 p-lg-5 w-50 shadow border-0">
   <?php 
      Helper::form('input', 'text', 'username', 'Username', null, null); 
      Helper::form('input', 'password', 'password', 'Password', null, null); 
      Helper::form('input', 'text', 'name', 'Name', null, null); 
      Helper::form('input', 'text', 'address', 'Address', null, null); 
      Helper::form('input', 'text', 'contact', 'Contact', null, null); 
   ?>

   <div class="input-group mb-5">
      <?php 
         Helper::form('radio', 'radio', 'gender', 'Man', 'man', null);
         Helper::form('radio', 'radio', 'gender', 'Woman', 'woman', null);
      ?>
   </div>

   <div class="btn-group w-25 ml-md-auto mr-5 mr-lg-4 ">
      <?php 
         Helper::route('#', 'info', 'fas fa-reply', 'back');  
         Helper::route('reset', 'success', 'fas fa-redo', 'button'); 
         Helper::route('create', 'primary', 'fas fa-plus', 'button'); 
      ?>
   </div>
</form>