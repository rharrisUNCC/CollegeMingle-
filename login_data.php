<?php
  $uname_login = $_POST['uname_login'];
  $pword_login = $_POST['pword_login'];
  
  if ( empty($uname_login) ) {
      $error_message = 'Username is required!';
  } 
  if ( empty($pword_login) ) {
      $error_massage = 'Password is required!';
  } else {
      $error_message = '';
  }
?>
