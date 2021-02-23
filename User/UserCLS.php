<?php
require_once('./User/UserCLSDAO.php');

class User implements \JsonSerializable {
  // Properties
  private $user_id;
  private $username;
  private $first_name;
  private $last_name;
  private $password;
  private $ability_rating;


  // properties
  function __construct() {
  }
  // User id
  function getUserId(){
    return $this->user_id;
  }
  function setUserId($user_id){
    $this->user_id = $user_id;
  }

  // User name
  function getUsername() {
    return $this->username;
  }
  function setUsername($username){
    $this->username = $username;
  }

  // First name
  function getFirstName() {
    return $this->first_name;
  }
  function setFirstName($first_name){
    $this->first_name = $first_name;
  }

  // Last name
  function getLastName() {
    return $this->last_name;
  }
  function setLastName($last_name){
    $this->last_name = $last_name;
  }

  // Password
  function setPassword($password){
    $this->password = hash("sha256", $password);
  }
  function getPassword(){
    return $this->password;
  }

  // Ability rating
  function setAbilityRating($ability_rating){
      $this->ability_rating = $ability_rating;
  }
  function getAbilityRating(){
      return $this->ability_rating;
  }

  // methods

  // for user id
  function getUser($user_id){
    $this->user_id = $user_id;
    $userDAO = new userDAO();
    $userDAO->getUser($this);
    return $this;
  }

  // for username
  function getUserN($username){
    $this->username = $username;
    $userDAO = new userDAO();
    $userDAO->getUserN($this);
    return $this;
  }

  // for first name
  function getUserF($first_name){
    $this->first_name = $first_name;
    $userDAO = new userDAO();
    $userDAO->getUserF($this);
    return $this;
  }

  // for last name
  function getUserL($last_name){
    $this->last_name = $last_name;
    $userDAO = new userDAO();
    $userDAO->getUserL($this);
    return $this;
  }

  // for Ability
  function getAbility($ability_rating){
    $this->ability_rating = $ability_rating;
    $userDAO = new userDAO();
    $userDAO->getAbility($this);
    return $this;
    }


  function createUser(){
    $userDAO = new userDAO();
    $userDAO->createUser($this);
  }

  function deleteUser($username){
    $userDAO = new userDAO();
    $userDAO->deleteUser($username);
  }

  function checkLogin($username, $password){
    $userDAO = new userDAO();
    return $userDAO->checkLogin($username, $password);
  }

  public function jsonSerialize(){
      $vars = get_object_vars($this);
      return $vars;
  }
}
?>