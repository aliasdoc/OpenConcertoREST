<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_MODEREGLEMENT
 */
class OC_MODEREGLEMENT extends OC_BASE_MODEL
{
    protected $table = 'MODE_REGLEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_MODE_REGLEMENT',
        'NOM',
        'CODE',
        'AJOURS',
        'LENJOUR',
        'ID_TYPE_REGLEMENT',
        'ARCHIVE',
        'ORDRE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'FIN_MOIS',
        'COMPTANT',
        'DATE_DEPOT',
        'DATE_FACTURE',
        'DATE',
        'NUMERO',
        'ETS',
        'DATE_VIREMENT',
        'ID_BANQUE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDMODEREGLEMENT() {
		return $this->ID_MODE_REGLEMENT;
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
	public function getAJOURS() {
		return $this->AJOURS;
	}

	/**
	 * @return mixed
	 */
	public function getLENJOUR() {
		return $this->LENJOUR;
	}

	/**
	 * @return mixed
	 */
	public function getIDTYPEREGLEMENT() {
		return $this->ID_TYPE_REGLEMENT;
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
	public function getFINMOIS() {
		return $this->FIN_MOIS;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPTANT() {
		return $this->COMPTANT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEDEPOT() {
		return $this->DATE_DEPOT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFACTURE() {
		return $this->DATE_FACTURE;
	}

	/**
	 * @return mixed
	 */
	public function getDATE() {
		return $this->DATE;
	}

	/**
	 * @return mixed
	 */
	public function getNUMERO() {
		return $this->NUMERO;
	}

	/**
	 * @return mixed
	 */
	public function getETS() {
		return $this->ETS;
	}

	/**
	 * @return mixed
	 */
	public function getDATEVIREMENT() {
		return $this->DATE_VIREMENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDBANQUE() {
		return $this->ID_BANQUE;
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
	public function setAJOURS($value) {
		$this->AJOURS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLENJOUR($value) {
		$this->LENJOUR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTYPEREGLEMENT($value) {
		$this->ID_TYPE_REGLEMENT = $value;
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
	public function setFINMOIS($value) {
		$this->FIN_MOIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPTANT($value) {
		$this->COMPTANT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEDEPOT($value) {
		$this->DATE_DEPOT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFACTURE($value) {
		$this->DATE_FACTURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATE($value) {
		$this->DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMERO($value) {
		$this->NUMERO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setETS($value) {
		$this->ETS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEVIREMENT($value) {
		$this->DATE_VIREMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDBANQUE($value) {
		$this->ID_BANQUE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}