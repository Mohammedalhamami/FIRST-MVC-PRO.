<?php 
//represent controller which db updated insert something etc.
class UsersContr extends Users {
 public function createUser($firstname, $lastname, $dob) {
 $this->setUsers($firstname, $lastname, $dob);
 }
}