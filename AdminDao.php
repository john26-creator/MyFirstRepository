<?php

require_once 'DAO.php';

/**
 * Class AdminDAO
*/
abstract class AdminDAO extends EntityBase
{

  /**
   * Protected variable
   * @var varchar $email
   */
  protected $email;

  public function getEmail() {return $this->email;}

  public function setEmail($email) {$this->email=$email;}

  /**
   * Protected variable
   * @var varchar $password
   */
  protected $password;

  public function getPassword() {return $this->password;}

  public function setPassword($password) {$this->password=$password;}

  /**
   * Constructor
   * @var mixed $id
   */
  public function __construct($id=0)
  {
    parent::__construct();
    $this->table='admin';
    $this->primkeys=[];
    $this->fields=['email','password'];
    $this->sql="SELECT * FROM {$this->table}";
    if($id) $this->read($id);
  }

  // ==========!!!DO NOT PUT YOUR OWN CODE (BUSINESS LOGIC) HERE!!!========== //
  // EXTEND THIS DAO CLASS WITH YOUR OWN CLASS CONTAINING YOUR BUSINESS LOGIC //
  //  BECAUSE THIS CLASS FILE WILL BE OVERWRITTEN UPON EACH NEW PHPDAO BUILD  //
  // ======================================================================== //
}

