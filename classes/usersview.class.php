<?php 
//to show resluts to the user
class UsersView extends Users {

    public function showUsers($name) {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['users_firstname'] . " " . $results[0]['users_lastname']."<br>";
        echo "users date of birth is " . $results[0]['users_dateofbirth'];
    }

}