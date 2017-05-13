<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_COMMERCIAL
 */
class OC_COMMERCIAL extends OC_BASE_MODEL
{
    protected $table = 'COMMERCIAL';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_COMMERCIAL',
        'NOM',
        'PRENOM',
        'FONCTION',
        'TEL_STANDARD',
        'TEL_DIRECT',
        'TEL_MOBILE',
        'TEL_PERSONEL',
        'FAX',
        'EMAIL',
        'ARCHIVE',
        'ORDRE',
        'ID_TITRE_PERSONNEL',
        'ID_USER_COMMON',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDCOMMERCIAL() {
		return $this->ID_COMMERCIAL;
	}

	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getPRENOM() {
		return $this->PRENOM;
	}

	/**
	 * @return mixed
	 */
	public function getFONCTION() {
		return $this->FONCTION;
	}

	/**
	 * @return mixed
	 */
	public function getTELSTANDARD() {
		return $this->TEL_STANDARD;
	}

	/**
	 * @return mixed
	 */
	public function getTELDIRECT() {
		return $this->TEL_DIRECT;
	}

	/**
	 * @return mixed
	 */
	public function getTELMOBILE() {
		return $this->TEL_MOBILE;
	}

	/**
	 * @return mixed
	 */
	public function getTELPERSONEL() {
		return $this->TEL_PERSONEL;
	}

	/**
	 * @return mixed
	 */
	public function getFAX() {
		return $this->FAX;
	}

	/**
	 * @return mixed
	 */
	public function getEMAIL() {
		return $this->EMAIL;
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
	public function getIDTITREPERSONNEL() {
		return $this->ID_TITRE_PERSONNEL;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMON() {
		return $this->ID_USER_COMMON;
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
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMMERCIAL($value) {
		$this->ID_COMMERCIAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRENOM($value) {
		$this->PRENOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFONCTION($value) {
		$this->FONCTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELSTANDARD($value) {
		$this->TEL_STANDARD = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELDIRECT($value) {
		$this->TEL_DIRECT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELMOBILE($value) {
		$this->TEL_MOBILE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELPERSONEL($value) {
		$this->TEL_PERSONEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFAX($value) {
		$this->FAX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setEMAIL($value) {
		$this->EMAIL = $value;
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
	public function setIDTITREPERSONNEL($value) {
		$this->ID_TITRE_PERSONNEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMON($value) {
		$this->ID_USER_COMMON = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}