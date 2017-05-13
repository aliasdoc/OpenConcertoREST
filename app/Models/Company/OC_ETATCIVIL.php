<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ETATCIVIL
 */
class OC_ETATCIVIL extends OC_BASE_MODEL
{
    protected $table = 'ETAT_CIVIL';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_ADRESSE',
        'DATE_NAISSANCE',
        'NUMERO_SS',
        'NB_ENFANTS',
        'COMMUNE_NAISSANCE',
        'ID_DEPARTEMENT_NAISSANCE',
        'ID_PAYS_NAISSANCE',
        'TELEPHONE',
        'MAIL',
        'PORTABLE',
        'NB_PERS_A_CHARGE',
        'ID_SITUATION_FAMILIALE',
        'ARCHIVE',
        'ORDRE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDADRESSE() {
		return $this->ID_ADRESSE;
	}

	/**
	 * @return mixed
	 */
	public function getDATENAISSANCE() {
		return $this->DATE_NAISSANCE;
	}

	/**
	 * @return mixed
	 */
	public function getNUMEROSS() {
		return $this->NUMERO_SS;
	}

	/**
	 * @return mixed
	 */
	public function getNBENFANTS() {
		return $this->NB_ENFANTS;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMUNENAISSANCE() {
		return $this->COMMUNE_NAISSANCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDDEPARTEMENTNAISSANCE() {
		return $this->ID_DEPARTEMENT_NAISSANCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDPAYSNAISSANCE() {
		return $this->ID_PAYS_NAISSANCE;
	}

	/**
	 * @return mixed
	 */
	public function getTELEPHONE() {
		return $this->TELEPHONE;
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
	public function getPORTABLE() {
		return $this->PORTABLE;
	}

	/**
	 * @return mixed
	 */
	public function getNBPERSACHARGE() {
		return $this->NB_PERS_A_CHARGE;
	}

	/**
	 * @return mixed
	 */
	public function getIDSITUATIONFAMILIALE() {
		return $this->ID_SITUATION_FAMILIALE;
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
	public function setDATENAISSANCE($value) {
		$this->DATE_NAISSANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMEROSS($value) {
		$this->NUMERO_SS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNBENFANTS($value) {
		$this->NB_ENFANTS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMUNENAISSANCE($value) {
		$this->COMMUNE_NAISSANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDEPARTEMENTNAISSANCE($value) {
		$this->ID_DEPARTEMENT_NAISSANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPAYSNAISSANCE($value) {
		$this->ID_PAYS_NAISSANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELEPHONE($value) {
		$this->TELEPHONE = $value;
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
	public function setPORTABLE($value) {
		$this->PORTABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNBPERSACHARGE($value) {
		$this->NB_PERS_A_CHARGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSITUATIONFAMILIALE($value) {
		$this->ID_SITUATION_FAMILIALE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}