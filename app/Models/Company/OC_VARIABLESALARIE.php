<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_VARIABLESALARIE
 */
class OC_VARIABLESALARIE extends OC_BASE_MODEL
{
    protected $table = 'VARIABLE_SALARIE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'HEURE_ABS',
        'HEURE_110',
        'HEURE_125',
        'HEURE_150',
        'HEURE_200',
        'CONGES_PRIS',
        'HEURE_TRAV',
        'ARCHIVE',
        'ORDRE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getHEUREABS() {
		return $this->HEURE_ABS;
	}

	/**
	 * @return mixed
	 */
	public function getHEURE110() {
		return $this->HEURE_110;
	}

	/**
	 * @return mixed
	 */
	public function getHEURE125() {
		return $this->HEURE_125;
	}

	/**
	 * @return mixed
	 */
	public function getHEURE150() {
		return $this->HEURE_150;
	}

	/**
	 * @return mixed
	 */
	public function getHEURE200() {
		return $this->HEURE_200;
	}

	/**
	 * @return mixed
	 */
	public function getCONGESPRIS() {
		return $this->CONGES_PRIS;
	}

	/**
	 * @return mixed
	 */
	public function getHEURETRAV() {
		return $this->HEURE_TRAV;
	}

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
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
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
	 * @param $value
	 * @return $this
	 */
	public function setHEUREABS($value) {
		$this->HEURE_ABS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURE110($value) {
		$this->HEURE_110 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURE125($value) {
		$this->HEURE_125 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURE150($value) {
		$this->HEURE_150 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURE200($value) {
		$this->HEURE_200 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCONGESPRIS($value) {
		$this->CONGES_PRIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURETRAV($value) {
		$this->HEURE_TRAV = $value;
		return $this;
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
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}