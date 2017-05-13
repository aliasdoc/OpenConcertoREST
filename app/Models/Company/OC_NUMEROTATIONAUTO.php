<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_NUMEROTATIONAUTO
 */
class OC_NUMEROTATIONAUTO extends OC_BASE_MODEL
{
    protected $table = 'NUMEROTATION_AUTO';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'DEVIS_FORMAT',
        'DEVIS_START',
        'BON_L_FORMAT',
        'BON_L_START',
        'FACT_FORMAT',
        'FACT_START',
        'ARCHIVE',
        'ORDRE',
        'SALARIE_FORMAT',
        'SALARIE_START',
        'PROPOSITION_FORMAT',
        'PROPOSITION_START',
        'RELANCE_FORMAT',
        'RELANCE_START',
        'COMMANDE_CLIENT_START',
        'COMMANDE_CLIENT_FORMAT',
        'COMMANDE_START',
        'COMMANDE_FORMAT',
        'BON_R_FORMAT',
        'BON_R_START',
        'AFFAIRE_START',
        'AFFAIRE_FORMAT',
        'AVOIR_START',
        'AVOIR_FORMAT',
        'CODE_LETTRAGE',
        'COURRIER_FORMAT',
        'COURRIER_START',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'CREATION_DATE',
        'AVOIR_F_START',
        'AVOIR_F_FORMAT',
        'CLIENT_START',
        'CLIENT_FORMAT',
        'NOM'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getDEVISFORMAT() {
		return $this->DEVIS_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getDEVISSTART() {
		return $this->DEVIS_START;
	}

	/**
	 * @return mixed
	 */
	public function getBONLFORMAT() {
		return $this->BON_L_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getBONLSTART() {
		return $this->BON_L_START;
	}

	/**
	 * @return mixed
	 */
	public function getFACTFORMAT() {
		return $this->FACT_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getFACTSTART() {
		return $this->FACT_START;
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
	public function getSALARIEFORMAT() {
		return $this->SALARIE_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getSALARIESTART() {
		return $this->SALARIE_START;
	}

	/**
	 * @return mixed
	 */
	public function getPROPOSITIONFORMAT() {
		return $this->PROPOSITION_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getPROPOSITIONSTART() {
		return $this->PROPOSITION_START;
	}

	/**
	 * @return mixed
	 */
	public function getRELANCEFORMAT() {
		return $this->RELANCE_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getRELANCESTART() {
		return $this->RELANCE_START;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMANDECLIENTSTART() {
		return $this->COMMANDE_CLIENT_START;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMANDECLIENTFORMAT() {
		return $this->COMMANDE_CLIENT_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMANDESTART() {
		return $this->COMMANDE_START;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMANDEFORMAT() {
		return $this->COMMANDE_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getBONRFORMAT() {
		return $this->BON_R_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getBONRSTART() {
		return $this->BON_R_START;
	}

	/**
	 * @return mixed
	 */
	public function getAFFAIRESTART() {
		return $this->AFFAIRE_START;
	}

	/**
	 * @return mixed
	 */
	public function getAFFAIREFORMAT() {
		return $this->AFFAIRE_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getAVOIRSTART() {
		return $this->AVOIR_START;
	}

	/**
	 * @return mixed
	 */
	public function getAVOIRFORMAT() {
		return $this->AVOIR_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getCODELETTRAGE() {
		return $this->CODE_LETTRAGE;
	}

	/**
	 * @return mixed
	 */
	public function getCOURRIERFORMAT() {
		return $this->COURRIER_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getCOURRIERSTART() {
		return $this->COURRIER_START;
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
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
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
	public function getAVOIRFSTART() {
		return $this->AVOIR_F_START;
	}

	/**
	 * @return mixed
	 */
	public function getAVOIRFFORMAT() {
		return $this->AVOIR_F_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getCLIENTSTART() {
		return $this->CLIENT_START;
	}

	/**
	 * @return mixed
	 */
	public function getCLIENTFORMAT() {
		return $this->CLIENT_FORMAT;
	}

	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setDEVISFORMAT($value) {
		$this->DEVIS_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDEVISSTART($value) {
		$this->DEVIS_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBONLFORMAT($value) {
		$this->BON_L_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBONLSTART($value) {
		$this->BON_L_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFACTFORMAT($value) {
		$this->FACT_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFACTSTART($value) {
		$this->FACT_START = $value;
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
	public function setSALARIEFORMAT($value) {
		$this->SALARIE_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSALARIESTART($value) {
		$this->SALARIE_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPROPOSITIONFORMAT($value) {
		$this->PROPOSITION_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPROPOSITIONSTART($value) {
		$this->PROPOSITION_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRELANCEFORMAT($value) {
		$this->RELANCE_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRELANCESTART($value) {
		$this->RELANCE_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMANDECLIENTSTART($value) {
		$this->COMMANDE_CLIENT_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMANDECLIENTFORMAT($value) {
		$this->COMMANDE_CLIENT_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMANDESTART($value) {
		$this->COMMANDE_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMANDEFORMAT($value) {
		$this->COMMANDE_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBONRFORMAT($value) {
		$this->BON_R_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBONRSTART($value) {
		$this->BON_R_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAFFAIRESTART($value) {
		$this->AFFAIRE_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAFFAIREFORMAT($value) {
		$this->AFFAIRE_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAVOIRSTART($value) {
		$this->AVOIR_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAVOIRFORMAT($value) {
		$this->AVOIR_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODELETTRAGE($value) {
		$this->CODE_LETTRAGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOURRIERFORMAT($value) {
		$this->COURRIER_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOURRIERSTART($value) {
		$this->COURRIER_START = $value;
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
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
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
	public function setAVOIRFSTART($value) {
		$this->AVOIR_F_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAVOIRFFORMAT($value) {
		$this->AVOIR_F_FORMAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCLIENTSTART($value) {
		$this->CLIENT_START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCLIENTFORMAT($value) {
		$this->CLIENT_FORMAT = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}