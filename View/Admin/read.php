<!-- btn menu -->
<div class="btn-group mb-4">
   <?php 
      Helper::route('create', 'primary', 'fas fa-plus', 'menu');
      Helper::route('delete', 'danger', 'fas fa-times', 'menu');
      Helper::route('edit', 'warning', 'fas fa-exchange-alt', 'menu');
      Helper::route('process', 'success', 'fas fa-arrow-down', 'menu');
      Helper::route('info', 'info', 'fas fa-user', 'menu');
      Helper::route('&action=logout', 'danger', 'fas fa-long-arrow-left', 'menu');
      if ($status == 'Action'){
         Helper::route('#', 'secondary', 'fas fa-long-arrow-left', 'menu');
      }
   ?>
</div>

<!-- data table -->
<table class="table table-hover shadow p-5">
   <thead>
      <tr>
         <th scope="col" width="5%">#</th>
         <th scope="col" width="19%">Name</th>
         <th scope="col" width="19%">Gender</th>
         <th scope="col" width="19%">Address</th>
         <th scope="col" width="19%">Contact</th>
         <th scope="col" width="19%"><?= $status ?></th>
      </tr>
   </thead>
   <tbody>
      <?php $i = null ?>
      <?php foreach ( $datas as $data ) : ?>
         <?php if ( $data['role'] != 'admin' ) : ?>
            <tr>
               <th scope="row"><?= $i-=-1 ?></th>
               <td><?= $data['name'] ?></td>
               <td><?= $data['gender'] ?></td>
               <td><?= $data['address'] ?></td>
               <td><?= $data['contact'] ?></td>
               <td>
                  <div class="btn-group w-100">
                     <?php 
                        if( $content == 'delete' ) {
                           Helper::route('delete&id=' . $data['id'], 'danger', 'fas fa-trash', 'delete');
                        } elseif ($content == 'edit') {
                           Helper::route('edit&id=' . $data['id'], 'warning', 'fas fa-pen', 'update');
                        } elseif ($content == 'info') {
                           Helper::route('info&id=' . $data['id'], 'info', 'fas fa-info', 'info');
                        } else {
                           if ( $data['accepted'] == '1' ) {
                              Helper::route(null, 'success', 'fas fa-user-check', 'status');
                           } elseif ( $data['accepted'] == '0' ) {
                              Helper::route(null, 'danger', 'fas fa-user-times', 'status');
                           } else {
                              if($content == 'process'){ 
                                 Helper::route('rejected&id=' . $data['id'], 'danger', 'fas fa-user-minus', 'action');
                                 Helper::route('accepted&id=' . $data['id'], 'primary', 'fas fa-user-plus', 'action');
                              } else {                            
                                 Helper::route(null, 'warning', 'fas fa-user-cog', 'status');
                              }
                           }
                        }
                     ?>
                  </div>
               </td>
            </tr>
         <?php endif ?>
      <?php endforeach ?>
   </tbody>
</table>