<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_REGIMEBASE
 */
class OC_REGIMEBASE extends OC_BASE_MODEL
{
    protected $table = 'REGIME_BASE';

    protected $primaryKey = 'ID';

	public $timestamps = true;

    protected $fillable = [
        'ID_CODE_REGIME_BASE',
        'ID_CODE_REGIME_MALADIE',
        'ID_CODE_REGIME_AT',
        'ID_CODE_REGIME_VIEL_P',
        'ID_CODE_REGIME_VIEL_S',
        'ARCHIVE',
        'ORDRE',
        'NOM',
        'CODE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDCODEREGIMEBASE() {
		return $this->ID_CODE_REGIME_BASE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEREGIMEMALADIE() {
		return $this->ID_CODE_REGIME_MALADIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEREGIMEAT() {
		return $this->ID_CODE_REGIME_AT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEREGIMEVIELP() {
		return $this->ID_CODE_REGIME_VIEL_P;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEREGIMEVIELS() {
		return $this->ID_CODE_REGIME_VIEL_S;
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
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
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
	public function setIDCODEREGIMEBASE($value) {
		$this->ID_CODE_REGIME_BASE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEREGIMEMALADIE($value) {
		$this->ID_CODE_REGIME_MALADIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEREGIMEAT($value) {
		$this->ID_CODE_REGIME_AT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEREGIMEVIELP($value) {
		$this->ID_CODE_REGIME_VIEL_P = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEREGIMEVIELS($value) {
		$this->ID_CODE_REGIME_VIEL_S = $value;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODE($value) {
		$this->CODE = $value;
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