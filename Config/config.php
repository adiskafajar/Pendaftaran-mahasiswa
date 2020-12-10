<?php
   define('BASEURL', 'http://localhost/code/');
   define('ASSETS', BASEURL . 'Assets/');
   define('PAGES', BASEURL . 'View/');
   define('HELPER', BASEURL . 'Helper/helper.php');
   define('AUTH', PAGES . 'Auth/');
   define('ADMIN', PAGES . 'Admin/');
   define('PROCESS', ADMIN . 'process.php');
   define('LOGIN', AUTH.'?page=login');
   define('REGISTER', AUTH.'?page=register');
   define('MABA', PAGES . 'Maba');
   define('IMAGE', ASSETS . 'img/');
   define('STYLE', ASSETS . 'SASS/dist/style.css');
   define('SCRIPT', ASSETS . 'JS/script.js');
   define('BOOTSTRAP', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css');
   define('BOOTSTRAP_JS', '"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous">');
   define('FONTAWESOME', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
   define('VUE', 'https://cdn.jsdelivr.net/npm/vue');