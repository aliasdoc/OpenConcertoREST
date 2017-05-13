<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_SALARIE
 */
class OC_SALARIE extends OC_BASE_MODEL
{
    protected $table = 'SALARIE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CODE',
        'ID_TITRE_PERSONNEL',
        'NOM',
        'PRENOM',
        'NOM_JEUNE_FILLE',
        'ARCHIVE',
        'ORDRE',
        'ID_ETAT_CIVIL',
        'ID_REGLEMENT_PAYE',
        'ID_INFOS_SALARIE_PAYE',
        'ID_FICHE_PAYE',
        'ID_CUMULS_PAYE',
        'DERNIER_MOIS',
        'DERNIERE_ANNEE',
        'ID_CUMULS_CONGES',
        'ID_VARIABLE_SALARIE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getIDTITREPERSONNEL() {
		return $this->ID_TITRE_PERSONNEL;
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
	public function getPRENOM() {
		return $this->PRENOM;
	}

	/**
	 * @return mixed
	 */
	public function getNOMJEUNEFILLE() {
		return $this->NOM_JEUNE_FILLE;
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
	public function getIDETATCIVIL() {
		return $this->ID_ETAT_CIVIL;
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
	public function getIDINFOSSALARIEPAYE() {
		return $this->ID_INFOS_SALARIE_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getIDFICHEPAYE() {
		return $this->ID_FICHE_PAYE;
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
	public function getDERNIERMOIS() {
		return $this->DERNIER_MOIS;
	}

	/**
	 * @return mixed
	 */
	public function getDERNIEREANNEE() {
		return $this->DERNIERE_ANNEE;
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
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTITREPERSONNEL($value) {
		$this->ID_TITRE_PERSONNEL = $value;
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
	public function setPRENOM($value) {
		$this->PRENOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOMJEUNEFILLE($value) {
		$this->NOM_JEUNE_FILLE = $value;
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
	public function setIDETATCIVIL($value) {
		$this->ID_ETAT_CIVIL = $value;
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
	public function setIDINFOSSALARIEPAYE($value) {
		$this->ID_INFOS_SALARIE_PAYE = $value;
		return $this;
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
	public function setIDCUMULSPAYE($value) {
		$this->ID_CUMULS_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDERNIERMOIS($value) {
		$this->DERNIER_MOIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDERNIEREANNEE($value) {
		$this->DERNIERE_ANNEE = $value;
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