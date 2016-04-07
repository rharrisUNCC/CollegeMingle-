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
  $statement->bindValue(':', $);
  $statement->bindValue(':', $);
  $statement->bindValue(':', $);
  $statement->bindValue(':', $);
  $statement->execute();
  $statement->closeCursor();
  return $users;
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
  
}
?>

