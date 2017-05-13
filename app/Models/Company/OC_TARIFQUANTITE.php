<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TARIFQUANTITE
 */
class OC_TARIFQUANTITE extends OC_BASE_MODEL
{
    protected $table = 'TARIF_QUANTITE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_ARTICLE',
        'QUANTITE',
        'POURCENT_REMISE',
        'PRIX_METRIQUE_VT_1',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDARTICLE() {
		return $this->ID_ARTICLE;
	}

	/**
	 * @return mixed
	 */
	public function getQUANTITE() {
		return $this->QUANTITE;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENTREMISE() {
		return $this->POURCENT_REMISE;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEVT1() {
		return $this->PRIX_METRIQUE_VT_1;
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
	public function setIDARTICLE($value) {
		$this->ID_ARTICLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQUANTITE($value) {
		$this->QUANTITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENTREMISE($value) {
		$this->POURCENT_REMISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEVT1($value) {
		$this->PRIX_METRIQUE_VT_1 = $value;
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