<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FICHEPAYEELEMENT
 */
class OC_FICHEPAYEELEMENT extends OC_BASE_MODEL
{
    protected $table = 'FICHE_PAYE_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_FICHE_PAYE',
        'SOURCE',
        'IDSOURCE',
        'NOM',
        'NB_BASE',
        'TAUX_SAL',
        'TAUX_PAT',
        'MONTANT_SAL_AJ',
        'MONTANT_PAT',
        'ARCHIVE',
        'ORDRE',
        'POSITION',
        'MONTANT_SAL_DED',
        'VALIDE',
        'IMPRESSION',
        'IN_PERIODE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDFICHEPAYE() {
		return $this->ID_FICHE_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getSOURCE() {
		return $this->SOURCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDSOURCE() {
		return $this->IDSOURCE;
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
	public function getNBBASE() {
		return $this->NB_BASE;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXSAL() {
		return $this->TAUX_SAL;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXPAT() {
		return $this->TAUX_PAT;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTSALAJ() {
		return $this->MONTANT_SAL_AJ;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTPAT() {
		return $this->MONTANT_PAT;
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
	public function getPOSITION() {
		return $this->POSITION;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTSALDED() {
		return $this->MONTANT_SAL_DED;
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
	public function getIMPRESSION() {
		return $this->IMPRESSION;
	}

	/**
	 * @return mixed
	 */
	public function getINPERIODE() {
		return $this->IN_PERIODE;
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
	 * @param $value
	 * @return $this
	 */
	public function setIDFICHEPAYE($value) {
		$this->ID_FICHE_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOURCE($value) {
		$this->SOURCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSOURCE($value) {
		$this->IDSOURCE = $value;
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
	public function setNBBASE($value) {
		$this->NB_BASE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXSAL($value) {
		$this->TAUX_SAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXPAT($value) {
		$this->TAUX_PAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTSALAJ($value) {
		$this->MONTANT_SAL_AJ = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTPAT($value) {
		$this->MONTANT_PAT = $value;
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
	public function setPOSITION($value) {
		$this->POSITION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTSALDED($value) {
		$this->MONTANT_SAL_DED = $value;
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
	public function setIMPRESSION($value) {
		$this->IMPRESSION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINPERIODE($value) {
		$this->IN_PERIODE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}