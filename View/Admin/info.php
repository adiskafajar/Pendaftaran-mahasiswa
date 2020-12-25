<div class="card shadow p-3 mb-3">
   <div class="data">
      <div>name: <?= $data['name'] ?></div>
      <div>gender: <?= $data['gender'] ?></div>
      <div>address: <?= $data['address'] ?></div>
      <div>contact: <?= $data['contact'] ?></div>
   </div>
</div>

<div class="btn-group ml-md-auto mr-5 mr-lg-4 ">
   <?php
      Helper::route('#', 'info', 'fas fa-reply', 'back');
   ?>
</div>