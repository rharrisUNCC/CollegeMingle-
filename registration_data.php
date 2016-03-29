<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $age = $_POST['age'];
  $city = $_POST['city'];
  $major = $_POST['major'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $aboutUser = $_POST['aboutUser'];

    if (empty($first_name)) {
        error_message = 'Field(s) were left empty!';
      } else if (empty($last_name)) {
          error_message = 'Field(s) were left empty!';
        } else if (empty($city)) {
            error_message = 'Field(s) were left empty!';
          } else if (empty($major)) {
              error_message = 'Field(s) were left empty!';
            } else if (empty($major)) {
                error_message = 'Field(s) were left empty!';
              } else if (empty($email)) {
                  error_message = 'Field(s) were left empty!';
                } else if (empty($username)) {
                    error_message = 'Field(s) were left empty!';
                  } else if (empty($password)) {
                      error_message = 'Field(s) were left empty!';
                    } else if (empty($aboutUser)) {
                        error_message = 'Field(s) were left empty!';
                      } else {
                          error_message = '';  
                      }
                      
                      

?>
