<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_STOCK
 */
class OC_STOCK extends OC_BASE_MODEL
{
    protected $table = 'STOCK';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'QTE_REEL',
        'QTE_TH',
        'ARCHIVE',
        'ORDRE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'QTE_RECEPT_ATTENTE',
        'QTE_LIV_ATTENTE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getQTEREEL() {
		return $this->QTE_REEL;
	}

	/**
	 * @return mixed
	 */
	public function getQTETH() {
		return $this->QTE_TH;
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
	 * @return mixed
	 */
	public function getQTERECEPTATTENTE() {
		return $this->QTE_RECEPT_ATTENTE;
	}

	/**
	 * @return mixed
	 */
	public function getQTELIVATTENTE() {
		return $this->QTE_LIV_ATTENTE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTEREEL($value) {
		$this->QTE_REEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTETH($value) {
		$this->QTE_TH = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTERECEPTATTENTE($value) {
		$this->QTE_RECEPT_ATTENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTELIVATTENTE($value) {
		$this->QTE_LIV_ATTENTE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}