<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FAMILLEARTICLE
 */
class OC_FAMILLEARTICLE extends OC_BASE_MODEL
{
    protected $table = 'FAMILLE_ARTICLE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'NOM',
        'MODIFICATION_DATE',
        'ARCHIVE',
        'ID_FAMILLE_ARTICLE_PERE',
        'CODE',
        'CREATION_DATE',
        'ORDRE',
        'ID_COMPTE_PCE',
        'ID_COMPTE_PCE_ACHAT'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
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
	public function getNOM() {
		return $this->NOM;
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
	public function getARCHIVE() {
		return $this->ARCHIVE;
	}

	/**
	 * @return mixed
	 */
	public function getIDFAMILLEARTICLEPERE() {
		return $this->ID_FAMILLE_ARTICLE_PERE;
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
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
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
	public function getIDCOMPTEPCE() {
		return $this->ID_COMPTE_PCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACHAT() {
		return $this->ID_COMPTE_PCE_ACHAT;
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
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
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
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
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
	public function setIDFAMILLEARTICLEPERE($value) {
		$this->ID_FAMILLE_ARTICLE_PERE = $value;
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
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
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
	public function setIDCOMPTEPCE($value) {
		$this->ID_COMPTE_PCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEACHAT($value) {
		$this->ID_COMPTE_PCE_ACHAT = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}