<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_INFOSSALARIEPAYE
 */
class OC_INFOSSALARIEPAYE extends OC_BASE_MODEL
{
    protected $table = 'INFOS_SALARIE_PAYE';

    protected $primaryKey = 'ID';

	public $timestamps = true;

    protected $fillable = [
        'ID_IDCC',
        'ID_CONTRAT_SALARIE',
        'ID_CLASSEMENT_CONVENTIONNEL',
        'ARCHIVE',
        'ORDRE',
        'DUREE_HEBDO',
        'DUREE_MOIS',
        'DATE_ARRIVE',
        'CONGES_PAYES',
        'TAUX_AT',
        'SALAIRE_MOIS',
        'DATE_SORTIE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'CODE_AT',
        'CODE_SECTION_AT',
        'ID_COEFF_PRIME'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDIDCC() {
		return $this->ID_IDCC;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATSALARIE() {
		return $this->ID_CONTRAT_SALARIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCLASSEMENTCONVENTIONNEL() {
		return $this->ID_CLASSEMENT_CONVENTIONNEL;
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
	public function getDUREEHEBDO() {
		return $this->DUREE_HEBDO;
	}

	/**
	 * @return mixed
	 */
	public function getDUREEMOIS() {
		return $this->DUREE_MOIS;
	}

	/**
	 * @return mixed
	 */
	public function getDATEARRIVE() {
		return $this->DATE_ARRIVE;
	}

	/**
	 * @return mixed
	 */
	public function getCONGESPAYES() {
		return $this->CONGES_PAYES;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXAT() {
		return $this->TAUX_AT;
	}

	/**
	 * @return mixed
	 */
	public function getSALAIREMOIS() {
		return $this->SALAIRE_MOIS;
	}

	/**
	 * @return mixed
	 */
	public function getDATESORTIE() {
		return $this->DATE_SORTIE;
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
	public function getCODEAT() {
		return $this->CODE_AT;
	}

	/**
	 * @return mixed
	 */
	public function getCODESECTIONAT() {
		return $this->CODE_SECTION_AT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOEFFPRIME() {
		return $this->ID_COEFF_PRIME;
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
	public function setIDCONTRATSALARIE($value) {
		$this->ID_CONTRAT_SALARIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCLASSEMENTCONVENTIONNEL($value) {
		$this->ID_CLASSEMENT_CONVENTIONNEL = $value;
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
	public function setDUREEHEBDO($value) {
		$this->DUREE_HEBDO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDUREEMOIS($value) {
		$this->DUREE_MOIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEARRIVE($value) {
		$this->DATE_ARRIVE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCONGESPAYES($value) {
		$this->CONGES_PAYES = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXAT($value) {
		$this->TAUX_AT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSALAIREMOIS($value) {
		$this->SALAIRE_MOIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATESORTIE($value) {
		$this->DATE_SORTIE = $value;
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
	public function setCODEAT($value) {
		$this->CODE_AT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODESECTIONAT($value) {
		$this->CODE_SECTION_AT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOEFFPRIME($value) {
		$this->ID_COEFF_PRIME = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}