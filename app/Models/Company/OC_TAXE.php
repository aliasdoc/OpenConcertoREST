<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TAXE
 */
class OC_TAXE extends OC_BASE_MODEL
{
    protected $table = 'TAXE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_TAXE',
        'NOM',
        'TAUX',
        'ARCHIVE',
        'CODE',
        'ID_COMPTE_PCE',
        'ORDRE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'ID_COMPTE_PCE_DED',
        'ID_COMPTE_PCE_COLLECTE',
        'DEFAULT',
        'ID_COMPTE_PCE_VENTE',
        'ID_COMPTE_PCE_VENTE_SERVICE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDTAXE() {
		return $this->ID_TAXE;
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
	public function getTAUX() {
		return $this->TAUX;
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
	public function getCODE() {
		return $this->CODE;
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
	public function getORDRE() {
		return $this->ORDRE;
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
	public function getIDCOMPTEPCEDED() {
		return $this->ID_COMPTE_PCE_DED;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCECOLLECTE() {
		return $this->ID_COMPTE_PCE_COLLECTE;
	}

	/**
	 * @return mixed
	 */
	public function getDEFAULT() {
		return $this->DEFAULT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEVENTE() {
		return $this->ID_COMPTE_PCE_VENTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEVENTESERVICE() {
		return $this->ID_COMPTE_PCE_VENTE_SERVICE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTAXE($value) {
		$this->ID_TAXE = $value;
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
	public function setTAUX($value) {
		$this->TAUX = $value;
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
	public function setCODE($value) {
		$this->CODE = $value;
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
	public function setORDRE($value) {
		$this->ORDRE = $value;
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
	public function setIDCOMPTEPCEDED($value) {
		$this->ID_COMPTE_PCE_DED = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCECOLLECTE($value) {
		$this->ID_COMPTE_PCE_COLLECTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDEFAULT($value) {
		$this->DEFAULT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEVENTE($value) {
		$this->ID_COMPTE_PCE_VENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEVENTESERVICE($value) {
		$this->ID_COMPTE_PCE_VENTE_SERVICE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}