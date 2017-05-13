<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_DECLARATIONDSN
 */
class OC_DECLARATIONDSN extends OC_BASE_MODEL
{
    protected $table = 'DECLARATION_DSN';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_DSN_NATURE',
        'DATE',
        'DATE_ENVOI',
        'TEST',
        'ENVOYE',
        'COMMENTAIRE',
        'DSN_FILE',
        'NUMERO',
        'ANNEE',
        'ID_MOIS',
        'ARCHIVE',
        'ORDRE',
        'ID_ARRET_TRAVAIL',
        'ID_REPRISE_TRAVAIL',
        'ID_MOIS_REGUL',
        'ANNULE_REMPLACE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDDSNNATURE() {
		return $this->ID_DSN_NATURE;
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
	public function getDATEENVOI() {
		return $this->DATE_ENVOI;
	}

	/**
	 * @return mixed
	 */
	public function getTEST() {
		return $this->TEST;
	}

	/**
	 * @return mixed
	 */
	public function getENVOYE() {
		return $this->ENVOYE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMENTAIRE() {
		return $this->COMMENTAIRE;
	}

	/**
	 * @return mixed
	 */
	public function getDSNFILE() {
		return $this->DSN_FILE;
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
	public function getANNEE() {
		return $this->ANNEE;
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
	public function getIDARRETTRAVAIL() {
		return $this->ID_ARRET_TRAVAIL;
	}

	/**
	 * @return mixed
	 */
	public function getIDREPRISETRAVAIL() {
		return $this->ID_REPRISE_TRAVAIL;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOISREGUL() {
		return $this->ID_MOIS_REGUL;
	}

	/**
	 * @return mixed
	 */
	public function getANNULEREMPLACE() {
		return $this->ANNULE_REMPLACE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDSNNATURE($value) {
		$this->ID_DSN_NATURE = $value;
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
	public function setDATEENVOI($value) {
		$this->DATE_ENVOI = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTEST($value) {
		$this->TEST = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setENVOYE($value) {
		$this->ENVOYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMENTAIRE($value) {
		$this->COMMENTAIRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDSNFILE($value) {
		$this->DSN_FILE = $value;
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
	public function setANNEE($value) {
		$this->ANNEE = $value;
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
	public function setIDARRETTRAVAIL($value) {
		$this->ID_ARRET_TRAVAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDREPRISETRAVAIL($value) {
		$this->ID_REPRISE_TRAVAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOISREGUL($value) {
		$this->ID_MOIS_REGUL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setANNULEREMPLACE($value) {
		$this->ANNULE_REMPLACE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}