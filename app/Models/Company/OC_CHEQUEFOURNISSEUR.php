<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CHEQUEFOURNISSEUR
 */
class OC_CHEQUEFOURNISSEUR extends OC_BASE_MODEL
{
    protected $table = 'CHEQUE_FOURNISSEUR';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ARCHIVE',
        'ORDRE',
        'ID_FOURNISSEUR',
        'MONTANT',
        'DECAISSE',
        'ID_MOUVEMENT',
        'DATE_ACHAT',
        'DATE_MIN_DECAISSE',
        'DATE_DECAISSE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'DATE',
        'NUMERO',
        'ETS',
        'REG_COMPTA',
        'ID_BANQUE'
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
	public function getIDFOURNISSEUR() {
		return $this->ID_FOURNISSEUR;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANT() {
		return $this->MONTANT;
	}

	/**
	 * @return mixed
	 */
	public function getDECAISSE() {
		return $this->DECAISSE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOUVEMENT() {
		return $this->ID_MOUVEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEACHAT() {
		return $this->DATE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEMINDECAISSE() {
		return $this->DATE_MIN_DECAISSE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEDECAISSE() {
		return $this->DATE_DECAISSE;
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
	public function getREGCOMPTA() {
		return $this->REG_COMPTA;
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
	public function setIDFOURNISSEUR($value) {
		$this->ID_FOURNISSEUR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANT($value) {
		$this->MONTANT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDECAISSE($value) {
		$this->DECAISSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOUVEMENT($value) {
		$this->ID_MOUVEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEACHAT($value) {
		$this->DATE_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEMINDECAISSE($value) {
		$this->DATE_MIN_DECAISSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEDECAISSE($value) {
		$this->DATE_DECAISSE = $value;
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
	public function setREGCOMPTA($value) {
		$this->REG_COMPTA = $value;
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