<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CHEQUEAVOIRCLIENT
 */
class OC_CHEQUEAVOIRCLIENT extends OC_BASE_MODEL
{
    protected $table = 'CHEQUE_AVOIR_CLIENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_CLIENT',
        'MONTANT',
        'DECAISSE',
        'ID_MOUVEMENT',
        'DATE_AVOIR',
        'DATE_MIN_DECAISSE',
        'ARCHIVE',
        'ORDRE',
        'DATE_DECAISSE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'DATE',
        'NUMERO',
        'ETS',
        'REG_COMPTA'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
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
	public function getDATEAVOIR() {
		return $this->DATE_AVOIR;
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
	public function getDATEDECAISSE() {
		return $this->DATE_DECAISSE;
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
	 * @param $value
	 * @return $this
	 */
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
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
	public function setDATEAVOIR($value) {
		$this->DATE_AVOIR = $value;
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
	public function setDATEDECAISSE($value) {
		$this->DATE_DECAISSE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}