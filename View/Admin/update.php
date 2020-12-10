<form action="process.php?action=update" method="post" class="card mx-auto w-50 p-3 p-lg-5 shadow border-0"> 
   <?php 
      Helper::form('input', 'hidden', 'id', null, $data['id'], null);
      Helper::form('input', 'text', 'username', 'Username', $data['username'], null);
      Helper::form('input', 'password', 'password', 'Password', $data['password'], null);
      Helper::form('input', 'text', 'name', 'Name', $data['name'], null);
      Helper::form('input', 'text', 'address', 'Address', $data['address'], null);
      Helper::form('input', 'text', 'contact', 'Contact', $data['contact'], null);
   ?>

   <div class="input-group mb-5">
      <?php
         Helper::form('radio', 'radio', 'gender', 'Man', 'man', $man);
         Helper::form('radio', 'radio', 'gender', 'Woman', 'woman', $woman);
      ?>
   </div>

   <div class="btn-group w-25 ml-md-auto mr-5 mr-lg-4">
      <?php
         Helper::route('edit', 'info', 'fas fa-reply', 'back');  
         Helper::route('reset', 'success', 'fas fa-redo', 'button'); 
         Helper::route('create', 'warning', 'fas fa-pen', 'button'); 
      ?>
   </div>
</form>

























































































<!-- 
   <input type="hidden" name="id" value="<?= $data['id'] ?>">
   <div class="input-group mb-4">
      <input type="text" class="form-control rounded-0" aria-label="Sizing example input" placeholder="Username" name="username" required value="<?= $data['username'] ?>">
   </div>
   <div class="input-group mb-4">
      <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 " aria-label="Sizing example input" placeholder="Password" name="password" required value="<?= $data['password'] ?>">
   </div>
   <div class="input-group mb-4">
      <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 " aria-label="Sizing example input" placeholder="Name" name="name" required value="<?= $data['name'] ?>">
   </div>
   <div class="input-group mb-4">
      <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" aria-label="Sizing example input" placeholder="Address" name="address" required value="<?= $data['address'] ?>">
   </div>
   <div class="input-group mb-4">
      <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0" aria-label="Sizing example input" placeholder="Contact" name="contact" required value="<?= $data['contact'] ?>">
   </div>
   <div class="input-group mb-5">
      <div class="form-check mr-3">
         <input class="form-check-input" type="radio" name="gender" value="man" required <?= $man ?>>
         <label class="form-check-label text-secondary" for="gender1" >
            Man
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="gender" value="woman" required <?= $woman ?>>
         <label class="form-check-label text-secondary" for="gender2">
            Woman
         </label>
      </div>
   </div>

   <div class="btn-group w-25 ml-md-auto mr-5 mr-lg-4 ">
      <?php Helper::route('edit', 'info', 'fas fa-reply', 'back'); ?>
      <?php Helper::route('#', 'success', 'fas fa-redo', 'back'); ?>
      <button type="submit" name="update" class="btn btn-warning rounded-pill text-white"><i class="fas fa-pen"></i></button>
   </div> -->
