<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_SOCIETECOMMON
 */
class OC_SOCIETECOMMON extends Model
{
    protected $table = 'SOCIETE_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'DATABASE_NAME',
        'NOM',
        'NUM_SIRET',
        'NUM_NII',
        'NUM_APE',
        'ID_EXERCICE_COMMON',
        'NUM_TEL',
        'NUM_FAX',
        'MAIL',
        'ID_ADRESSE_COMMON',
        'TYPE',
        'ORDRE',
        'ARCHIVE',
        'NUMERO_URSSAF',
        'RCS',
        'CAPITAL',
        'ID_DEVISE',
        'IBAN',
        'BIC',
        'ORG_PROTECTION_SOCIAL_ID'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getDATABASENAME() {
		return $this->DATABASE_NAME;
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
	public function getNUMSIRET() {
		return $this->NUM_SIRET;
	}

	/**
	 * @return mixed
	 */
	public function getNUMNII() {
		return $this->NUM_NII;
	}

	/**
	 * @return mixed
	 */
	public function getNUMAPE() {
		return $this->NUM_APE;
	}

	/**
	 * @return mixed
	 */
	public function getIDEXERCICECOMMON() {
		return $this->ID_EXERCICE_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getNUMTEL() {
		return $this->NUM_TEL;
	}

	/**
	 * @return mixed
	 */
	public function getNUMFAX() {
		return $this->NUM_FAX;
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
	public function getIDADRESSECOMMON() {
		return $this->ID_ADRESSE_COMMON;
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
	public function getORDRE() {
		return $this->ORDRE;
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
	public function getNUMEROURSSAF() {
		return $this->NUMERO_URSSAF;
	}

	/**
	 * @return mixed
	 */
	public function getRCS() {
		return $this->RCS;
	}

	/**
	 * @return mixed
	 */
	public function getCAPITAL() {
		return $this->CAPITAL;
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
	public function getIBAN() {
		return $this->IBAN;
	}

	/**
	 * @return mixed
	 */
	public function getBIC() {
		return $this->BIC;
	}

	/**
	 * @return mixed
	 */
	public function getORGPROTECTIONSOCIALID() {
		return $this->ORG_PROTECTION_SOCIAL_ID;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATABASENAME($value) {
		$this->DATABASE_NAME = $value;
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
	public function setNUMSIRET($value) {
		$this->NUM_SIRET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMNII($value) {
		$this->NUM_NII = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMAPE($value) {
		$this->NUM_APE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDEXERCICECOMMON($value) {
		$this->ID_EXERCICE_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMTEL($value) {
		$this->NUM_TEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMFAX($value) {
		$this->NUM_FAX = $value;
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
	public function setIDADRESSECOMMON($value) {
		$this->ID_ADRESSE_COMMON = $value;
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
	public function setORDRE($value) {
		$this->ORDRE = $value;
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
	public function setNUMEROURSSAF($value) {
		$this->NUMERO_URSSAF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRCS($value) {
		$this->RCS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCAPITAL($value) {
		$this->CAPITAL = $value;
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
	public function setIBAN($value) {
		$this->IBAN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBIC($value) {
		$this->BIC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setORGPROTECTIONSOCIALID($value) {
		$this->ORG_PROTECTION_SOCIAL_ID = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}