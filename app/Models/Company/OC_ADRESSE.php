<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ADRESSE
 */
class OC_ADRESSE extends OC_BASE_MODEL
{
    protected $table = 'ADRESSE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ARCHIVE',
        'ORDRE',
        'ID_ADRESSE',
        'RUE',
        'PAYS',
        'VILLE',
        'HAS_CEDEX',
        'CEDEX',
        'DEST',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'ID_CLIENT',
        'CODE_POSTAL',
        'PROVINCE',
        'LIBELLE',
        'TYPE',
        'EMAIL_CONTACT'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getARCHIVE() {
		return $this->ARCHIVE;
	}

	/**
	 * @return mixed
	 */
	public function getORDRE() {
		return $this->ORDRE;
	}

	/**
	 * @return mixed
	 */
	public function getIDADRESSE() {
		return $this->ID_ADRESSE;
	}

	/**
	 * @return mixed
	 */
	public function getRUE() {
		return $this->RUE;
	}

	/**
	 * @return mixed
	 */
	public function getPAYS() {
		return $this->PAYS;
	}

	/**
	 * @return mixed
	 */
	public function getVILLE() {
		return $this->VILLE;
	}

	/**
	 * @return mixed
	 */
	public function getHASCEDEX() {
		return $this->HAS_CEDEX;
	}

	/**
	 * @return mixed
	 */
	public function getCEDEX() {
		return $this->CEDEX;
	}

	/**
	 * @return mixed
	 */
	public function getDEST() {
		return $this->DEST;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
	}

	/**
	 * @return mixed
	 */
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
	}

	/**
	 * @return mixed
	 */
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getCODEPOSTAL() {
		return $this->CODE_POSTAL;
	}

	/**
	 * @return mixed
	 */
	public function getPROVINCE() {
		return $this->PROVINCE;
	}

	/**
	 * @return mixed
	 */
	public function getLIBELLE() {
		return $this->LIBELLE;
	}

	/**
	 * @return mixed
	 */
	public function getTYPE() {
		return $this->TYPE;
	}

	/**
	 * @return mixed
	 */
	public function getEMAILCONTACT() {
		return $this->EMAIL_CONTACT;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setARCHIVE($value) {
		$this->ARCHIVE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setORDRE($value) {
		$this->ORDRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDADRESSE($value) {
		$this->ID_ADRESSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRUE($value) {
		$this->RUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPAYS($value) {
		$this->PAYS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVILLE($value) {
		$this->VILLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHASCEDEX($value) {
		$this->HAS_CEDEX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCEDEX($value) {
		$this->CEDEX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDEST($value) {
		$this->DEST = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONCREATE($value) {
		$this->ID_USER_COMMON_CREATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEPOSTAL($value) {
		$this->CODE_POSTAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPROVINCE($value) {
		$this->PROVINCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLIBELLE($value) {
		$this->LIBELLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTYPE($value) {
		$this->TYPE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setEMAILCONTACT($value) {
		$this->EMAIL_CONTACT = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}