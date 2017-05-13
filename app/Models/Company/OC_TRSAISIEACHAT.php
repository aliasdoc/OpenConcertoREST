<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TRSAISIEACHAT
 */
class OC_TRSAISIEACHAT extends OC_BASE_MODEL
{
    protected $table = 'TR_SAISIE_ACHAT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_SAISIE_ACHAT',
        'ARCHIVE',
        'ORDRE',
        'ID_AVOIR_FOURNISSEUR'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDSAISIEACHAT() {
		return $this->ID_SAISIE_ACHAT;
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
	public function getIDAVOIRFOURNISSEUR() {
		return $this->ID_AVOIR_FOURNISSEUR;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSAISIEACHAT($value) {
		$this->ID_SAISIE_ACHAT = $value;
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
	public function setIDAVOIRFOURNISSEUR($value) {
		$this->ID_AVOIR_FOURNISSEUR = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}