<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_OBJECTIFCOMMERCIAL
 */
class OC_OBJECTIFCOMMERCIAL extends OC_BASE_MODEL
{
    protected $table = 'OBJECTIF_COMMERCIAL';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'MOIS',
        'ANNEE',
        'MARGE_HT',
        'POURCENT_MARGE',
        'CHIFFRE_AFFAIRE',
        'ID_COMMERCIAL',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getMOIS() {
		return $this->MOIS;
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
	public function getMARGEHT() {
		return $this->MARGE_HT;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENTMARGE() {
		return $this->POURCENT_MARGE;
	}

	/**
	 * @return mixed
	 */
	public function getCHIFFREAFFAIRE() {
		return $this->CHIFFRE_AFFAIRE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMMERCIAL() {
		return $this->ID_COMMERCIAL;
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
	public function setMOIS($value) {
		$this->MOIS = $value;
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
	public function setMARGEHT($value) {
		$this->MARGE_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENTMARGE($value) {
		$this->POURCENT_MARGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHIFFREAFFAIRE($value) {
		$this->CHIFFRE_AFFAIRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMMERCIAL($value) {
		$this->ID_COMMERCIAL = $value;
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