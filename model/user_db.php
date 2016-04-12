<?php

//add_user function
function add_user() {
  global $db
  $query = 'INSERT INTO users
                (user_id, user_sex, wanted_sex, first_name, last_name, age, city
                state, college, major, year, email, username, pass, bio, user_type, wanted_type)
            VALUES
                (:user_id, :user_sex, :wanted_sex, :first_name, :last_name, :age, :city
                :state, :college, :major, :year, :email, :username, :pass, :bio, :user_type, :wanted_type)';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':user_sex', $user_sex);
  $statement->bindValue(':wanted_sex', $wanted_sex);
  $statement->bindValue(':first_name', $first_name);
  $statement->bindValue(':last_name', $last_name);
  $statement->bindValue(':age', $age);
  $statement->bindValue(':city', $city);
  $statement->bindValue(':state', $state);
  $statement->bindValue(':college', $college);
  $statement->bindValue(':major', $major);
  $statement->bindValue(':year', $year);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':username', $username);
  $statement->bindValue(':pass', $pass);
  $statement->bindValue(':bio', $bio);
  $statement->bindValue(':user_type', $user_type);
  $statement->bindValue(':wanted_type', $wanted_type);
  $statement->execute();
  $statement->closeCursor();
}
//delete_user function
function delete_user() {
  global $db;
  $query = 'DELETE FROM users
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $statement->closeCursor();
}

//quick_match function
function quick_match() {
  global $db;
  $query = 'INSERT INTO quick_match'
  $statement = $db->prepare($query);
  $statement->bindValue();
  $statement->execute();
  $statement->closeCursor();
  
}
?>

