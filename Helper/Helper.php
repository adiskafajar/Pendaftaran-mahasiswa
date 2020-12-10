<?php 
   abstract class Helper
   {
      public static function route($link, $color, $icon, $type)
      {
         switch ($type) {
            case 'action': 
               echo '<a href="'. PROCESS .'?action='. $link .'" class="btn btn-'. $color .' text-white w-100 "><i class="'. $icon .'"></i></a>';
               break;
            case 'delete': 
               echo '<a href="'. PROCESS .'?action='. $link .'" class="btn btn-'. $color .' text-white w-100 "><i class="'. $icon .'"></i></a>';
               break;
            case 'update': 
               echo '<a href="'. ADMIN .'?page=update&action='. $link .'" class="btn btn-'. $color .' text-white w-100 "><i class="'. $icon .'"></i></a>';
               break;
            case 'info': 
               echo '<a href="'. ADMIN .'?page=info_data&action='. $link .'" class="btn btn-'. $color .' text-white w-100 "><i class="'. $icon .'"></i></a>';
               break;
            case 'status': 
               echo '<a href="'. ADMIN .'" class="btn btn-'. $color .' text-white w-100 "><i class="'. $icon .'"></i></a>';
               break;
            case 'menu' : 
               echo '<a v-bind:title="action.'. $link .'" href="'. ADMIN  .'?page='. $link .'" class="btn btn-'. $color .' rounded-pill mr-3 text-white"><i class="'. $icon .'"></i></a>';
               break;
            case 'back' :
               echo '<a href="'. ADMIN  .'?page='.$link.'" class="btn btn-'. $color .' rounded mr-3 text-white"><i class="'. $icon .'"></i></a>';
               break;
            case 'button' :
               echo "<button type='submit' name='$link' class='btn btn-$color rounded mr-3 text-white'><i class='$icon'></i></button>";
         }
      }   

      public static function form($input, $type, $name, $placeholder, $value, $checked)
      {
         switch($input) {
            case 'input': 
               echo"
                  <div class='input-group mb-4'>
                     <input type='$type' class='form-control ' placeholder='$placeholder' name='$name' value='$value' required autocomplete>
                  </div>";
               break;
            case 'radio': 
               echo "
                  <div class='form-check mr-3'>
                     <input class='form-check-input' type='$type' name='$name' value='$value' required $checked >
                     <label class='form-check-label text-secondary'>
                        $placeholder
                     </label>
                  </div>
               ";
         }
      }

      public static function flash($flash){
         switch($flash){
            case 'username':
               echo 
                  '<div class="alert danger" role="alert">
                     <div>username tidak ditemukan</div>
                  </div>';
               break;
            case 'password':
               echo 
                  '<div class="alert danger" role="alert">
                     <div>password anda salah</div>
                  </div>';

               break;
            case 'rejected':
               echo 
                  '<div class="alert danger" role="alert">
                     <div>pendaftaran anda ditolak</div>
                  </div>';
               break;
            case 'process':
               echo 
                  '<div class="alert warning" role="alert">
                     <div>Pendaftaran masih diproses</div>
                  </div>';
               break;
            case 'register':
               echo 
                  '<div class="alert success" role="alert">
                     <div>Data anda sudah masuk</div>
                  </div>';
               break;
         }
      }
   }
