<?php

require_once 'DAO.php';

/**
 * Class EmployeDAO
*/
abstract class EmployeDAO extends EntityBase
{

   /**
   * Protected variable
   * (PK)->Primary key
   * @var int $id
   */
	protected $id;

	public function getId() {return $this->id;}

	public function setId($id) {$this->id=$id;}

	/**
	* Protected variable
	* (UQ)->Unique key
	* @var varchar $email
	*/
	protected $email;

	public function getEmail() {return $this->email;}

	public function setEmail($email) {$this->email=$email;}

	/**
	* Protected variable
	* @var varchar $motDePasse
	*/
	protected $motDePasse;

	public function getMotDePasse() {return $this->motDePasse;}

	public function setMotDePasse($motDePasse) {$this->motDePasse=$motDePasse;}

	/**
	* Protected variable
	* (PK)->Primary key
	* @var int $idEntreprise
	*/
	protected $idEntreprise;

	public function getIdEntreprise() {return $this->idEntreprise;}

	public function setIdEntreprise($idEntreprise) {$this->idEntreprise=$idEntreprise;}

	/**
	* Protected variable
	* @var tinyint $entreprise
	*/
	protected $entreprise;

	public function getEntreprise() {return $this->entreprise;}

	public function setEntreprise($entreprise) {$this->entreprise=$entreprise;}

	/**
	* Constructor
	* @var mixed $id
	*/
	public function __construct($id=0)
	{
		parent::__construct();
		$this->table='employe';
		$this->primkeys=['id','idEntreprise'];
		$this->fields=['email','motDePasse','entreprise'];
		$this->sql="SELECT * FROM {$this->table}";
		if($id) $this->read($id);
	}

	/**
	* Column id Finder
	* @return object[]
	*/
	public function findById($id)
	{
		$sql="SELECT * FROM employe WHERE id='$id'";
		return $this->getSelfObjects($sql);
	}

	/**
	* Unique Key Finder
	* @return object
	*/
	public function findByEmail($email)
	{
		$sql="SELECT * FROM employe WHERE email='$email' LIMIT 1";
		return $this->getSelfObject($sql);
	}

	/**
	* Column idEntreprise Finder
	* @return object[]
	*/
	public function findByIdEntreprise($idEntreprise)
	{
		$sql="SELECT * FROM employe WHERE idEntreprise='$idEntreprise'";
		return $this->getSelfObjects($sql);
	}

}
