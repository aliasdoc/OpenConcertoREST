<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_BANQUE
 */
class OC_BANQUE extends OC_BASE_MODEL
{
    protected $table = 'BANQUE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_JOURNAL',
        'INFOS',
        'NUMERO_RUE',
        'RUE',
        'IBAN',
        'BIC',
        'VOIE',
        'VILLE',
        'NOM',
        'DOMICILIATION',
        'CODE',
        'AFFACTURAGE',
        'ID_COMPTE_PCE',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDJOURNAL() {
		return $this->ID_JOURNAL;
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
	public function getNUMERORUE() {
		return $this->NUMERO_RUE;
	}

	/**
	 * @return mixed
	 */
	public function getRUE() {
		return $this->RUE;
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
	public function getVOIE() {
		return $this->VOIE;
	}

	/**
	 * @return mixed
	 */
	public function getVILLE() {
		return $this->VILLE;
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
	public function getDOMICILIATION() {
		return $this->DOMICILIATION;
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
	public function getAFFACTURAGE() {
		return $this->AFFACTURAGE;
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
	 * @param $value
	 * @return $this
	 */
	public function setIDJOURNAL($value) {
		$this->ID_JOURNAL = $value;
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
	public function setNUMERORUE($value) {
		$this->NUMERO_RUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRUE($value) {
		$this->RUE = $value;
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
	public function setVOIE($value) {
		$this->VOIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVILLE($value) {
		$this->VILLE = $value;
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
	public function setDOMICILIATION($value) {
		$this->DOMICILIATION = $value;
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
	public function setAFFACTURAGE($value) {
		$this->AFFACTURAGE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}