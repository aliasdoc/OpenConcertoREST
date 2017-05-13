<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CONTACTADMINISTRATIF
 */
class OC_CONTACTADMINISTRATIF extends OC_BASE_MODEL
{
    protected $table = 'CONTACT_ADMINISTRATIF';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'PRENOM',
        'TEL_DIRECT',
        'TEL_MOBILE',
        'EMAIL',
        'FAX',
        'FONCTION',
        'TEL_PERSONEL',
        'TEL_STANDARD',
        'ID_TITRE_PERSONNEL',
        'N4DS',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
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
	public function getEMAIL() {
		return $this->EMAIL;
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
	public function getFONCTION() {
		return $this->FONCTION;
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
	public function getTELSTANDARD() {
		return $this->TEL_STANDARD;
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
	public function getN4DS() {
		return $this->N4DS;
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
	public function setEMAIL($value) {
		$this->EMAIL = $value;
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
	public function setFONCTION($value) {
		$this->FONCTION = $value;
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
	public function setTELSTANDARD($value) {
		$this->TEL_STANDARD = $value;
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
	public function setN4DS($value) {
		$this->N4DS = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}