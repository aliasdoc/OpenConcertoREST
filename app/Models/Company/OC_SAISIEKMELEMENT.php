<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_SAISIEKMELEMENT
 */
class OC_SAISIEKMELEMENT extends OC_BASE_MODEL
{
    protected $table = 'SAISIE_KM_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_SAISIE_KM',
        'NUMERO',
        'NOM',
        'NOM_ECRITURE',
        'DEBIT',
        'CREDIT',
        'ID_ECRITURE',
        'ARCHIVE',
        'ORDRE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'NOM_PIECE',
        'ANALYTIQUE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDSAISIEKM() {
		return $this->ID_SAISIE_KM;
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
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getNOMECRITURE() {
		return $this->NOM_ECRITURE;
	}

	/**
	 * @return mixed
	 */
	public function getDEBIT() {
		return $this->DEBIT;
	}

	/**
	 * @return mixed
	 */
	public function getCREDIT() {
		return $this->CREDIT;
	}

	/**
	 * @return mixed
	 */
	public function getIDECRITURE() {
		return $this->ID_ECRITURE;
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
	public function getNOMPIECE() {
		return $this->NOM_PIECE;
	}

	/**
	 * @return mixed
	 */
	public function getANALYTIQUE() {
		return $this->ANALYTIQUE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSAISIEKM($value) {
		$this->ID_SAISIE_KM = $value;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOMECRITURE($value) {
		$this->NOM_ECRITURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDEBIT($value) {
		$this->DEBIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREDIT($value) {
		$this->CREDIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDECRITURE($value) {
		$this->ID_ECRITURE = $value;
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
	public function setNOMPIECE($value) {
		$this->NOM_PIECE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setANALYTIQUE($value) {
		$this->ANALYTIQUE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}