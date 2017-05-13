<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FICHEPAYE
 */
class OC_FICHEPAYE extends OC_BASE_MODEL
{
    protected $table = 'FICHE_PAYE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ANNEE',
        'ARCHIVE',
        'ORDRE',
        'ID_SALARIE',
        'ID_PROFIL_PAYE',
        'SAL_BRUT',
        'COT_PAT',
        'COT_SAL',
        'NET_IMP',
        'NET_A_PAYER',
        'ACOMPTE',
        'ID_MOIS',
        'VALIDE',
        'CSG',
        'DU',
        'AU',
        'CONGES_ACQUIS',
        'ID_CUMULS_PAYE',
        'ID_CUMULS_CONGES',
        'ID_VARIABLE_SALARIE',
        'ID_REGLEMENT_PAYE',
        'NATURE_EMPLOI',
        'ID_IDCC',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getANNEE() {
		return $this->ANNEE;
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
	public function getIDSALARIE() {
		return $this->ID_SALARIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDPROFILPAYE() {
		return $this->ID_PROFIL_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getSALBRUT() {
		return $this->SAL_BRUT;
	}

	/**
	 * @return mixed
	 */
	public function getCOTPAT() {
		return $this->COT_PAT;
	}

	/**
	 * @return mixed
	 */
	public function getCOTSAL() {
		return $this->COT_SAL;
	}

	/**
	 * @return mixed
	 */
	public function getNETIMP() {
		return $this->NET_IMP;
	}

	/**
	 * @return mixed
	 */
	public function getNETAPAYER() {
		return $this->NET_A_PAYER;
	}

	/**
	 * @return mixed
	 */
	public function getACOMPTE() {
		return $this->ACOMPTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOIS() {
		return $this->ID_MOIS;
	}

	/**
	 * @return mixed
	 */
	public function getVALIDE() {
		return $this->VALIDE;
	}

	/**
	 * @return mixed
	 */
	public function getCSG() {
		return $this->CSG;
	}

	/**
	 * @return mixed
	 */
	public function getDU() {
		return $this->DU;
	}

	/**
	 * @return mixed
	 */
	public function getAU() {
		return $this->AU;
	}

	/**
	 * @return mixed
	 */
	public function getCONGESACQUIS() {
		return $this->CONGES_ACQUIS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCUMULSPAYE() {
		return $this->ID_CUMULS_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCUMULSCONGES() {
		return $this->ID_CUMULS_CONGES;
	}

	/**
	 * @return mixed
	 */
	public function getIDVARIABLESALARIE() {
		return $this->ID_VARIABLE_SALARIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDREGLEMENTPAYE() {
		return $this->ID_REGLEMENT_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getNATUREEMPLOI() {
		return $this->NATURE_EMPLOI;
	}

	/**
	 * @return mixed
	 */
	public function getIDIDCC() {
		return $this->ID_IDCC;
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
	 * @param $value
	 * @return $this
	 */
	public function setANNEE($value) {
		$this->ANNEE = $value;
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
	public function setIDSALARIE($value) {
		$this->ID_SALARIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPROFILPAYE($value) {
		$this->ID_PROFIL_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSALBRUT($value) {
		$this->SAL_BRUT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOTPAT($value) {
		$this->COT_PAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOTSAL($value) {
		$this->COT_SAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNETIMP($value) {
		$this->NET_IMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNETAPAYER($value) {
		$this->NET_A_PAYER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setACOMPTE($value) {
		$this->ACOMPTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOIS($value) {
		$this->ID_MOIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALIDE($value) {
		$this->VALIDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCSG($value) {
		$this->CSG = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDU($value) {
		$this->DU = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAU($value) {
		$this->AU = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCONGESACQUIS($value) {
		$this->CONGES_ACQUIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCUMULSPAYE($value) {
		$this->ID_CUMULS_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCUMULSCONGES($value) {
		$this->ID_CUMULS_CONGES = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDVARIABLESALARIE($value) {
		$this->ID_VARIABLE_SALARIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDREGLEMENTPAYE($value) {
		$this->ID_REGLEMENT_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNATUREEMPLOI($value) {
		$this->NATURE_EMPLOI = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDIDCC($value) {
		$this->ID_IDCC = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}