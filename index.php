<?php
 /**
  * vmn
  * 
  * 
  * @category vmn
  * @package vmn
  * @copyright Copyright (c) 2013 Lukas Svoboda
  * @version ##VERSION##, ##DATE##
  */

 error_reporting(E_ALL);
 require_once 'PHPExcel.php';
 require_once 'def_class.php'; 

 $vmn = new vmn();
 
 include_once 'pages/html_headers.php';
 
 $post = print_r($_REQUEST,"1");
 
 include "pages/datepicker.php";
 
 require_once 'pages/html_footer.php';

 ?>
