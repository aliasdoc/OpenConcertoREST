<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FOURNISSEUR
 */
class OC_FOURNISSEUR extends OC_BASE_MODEL
{
    protected $table = 'FOURNISSEUR';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CREATION_DATE',
        'CODE',
        'UE',
        'TYPE',
        'TEL',
        'ID_ADRESSE',
        'ID_ADRESSE_E',
        'ID_MODE_REGLEMENT',
        'MODIFICATION_DATE',
        'ARCHIVE',
        'FAX',
        'ID_FOURNISSEUR',
        'ORDRE',
        'ID_USER_COMMON_CREATE',
        'ID_COMPTE_PCE',
        'NOM',
        'ID_USER_COMMON_MODIFY',
        'ID_LANGUE',
        'ID_DEVISE',
        'RESPONSABLE',
        'TEL_P',
        'MAIL',
        'INFOS',
        'ID_COMPTE_PCE_CHARGE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
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
	public function getUE() {
		return $this->UE;
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
	public function getTEL() {
		return $this->TEL;
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
	public function getIDADRESSEE() {
		return $this->ID_ADRESSE_E;
	}

	/**
	 * @return mixed
	 */
	public function getIDMODEREGLEMENT() {
		return $this->ID_MODE_REGLEMENT;
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
	public function getFAX() {
		return $this->FAX;
	}

	/**
	 * @return mixed
	 */
	public function getIDFOURNISSEUR() {
		return $this->ID_FOURNISSEUR;
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
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
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
	public function getNOM() {
		return $this->NOM;
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
	public function getIDLANGUE() {
		return $this->ID_LANGUE;
	}

	/**
	 * @return mixed
	 */
	public function getIDDEVISE() {
		return $this->ID_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getRESPONSABLE() {
		return $this->RESPONSABLE;
	}

	/**
	 * @return mixed
	 */
	public function getTELP() {
		return $this->TEL_P;
	}

	/**
	 * @return mixed
	 */
	public function getMAIL() {
		return $this->MAIL;
	}

	/**
	 * @return mixed
	 */
	public function getINFOS() {
		return $this->INFOS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCECHARGE() {
		return $this->ID_COMPTE_PCE_CHARGE;
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
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUE($value) {
		$this->UE = $value;
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
	public function setTEL($value) {
		$this->TEL = $value;
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
	public function setIDADRESSEE($value) {
		$this->ID_ADRESSE_E = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODEREGLEMENT($value) {
		$this->ID_MODE_REGLEMENT = $value;
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
	public function setFAX($value) {
		$this->FAX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDFOURNISSEUR($value) {
		$this->ID_FOURNISSEUR = $value;
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
	public function setIDUSERCOMMONCREATE($value) {
		$this->ID_USER_COMMON_CREATE = $value;
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
	public function setNOM($value) {
		$this->NOM = $value;
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
	public function setIDLANGUE($value) {
		$this->ID_LANGUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDEVISE($value) {
		$this->ID_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRESPONSABLE($value) {
		$this->RESPONSABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELP($value) {
		$this->TEL_P = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAIL($value) {
		$this->MAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINFOS($value) {
		$this->INFOS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCECHARGE($value) {
		$this->ID_COMPTE_PCE_CHARGE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}