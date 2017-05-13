<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TRBONRECEPTION
 */
class OC_TRBONRECEPTION extends OC_BASE_MODEL
{
    protected $table = 'TR_BON_RECEPTION';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_BON_RECEPTION',
        'ARCHIVE',
        'ORDRE',
        'ID_SAISIE_ACHAT',
        'ID_FACTURE_FOURNISSEUR'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDBONRECEPTION() {
		return $this->ID_BON_RECEPTION;
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
	public function getIDSAISIEACHAT() {
		return $this->ID_SAISIE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDFACTUREFOURNISSEUR() {
		return $this->ID_FACTURE_FOURNISSEUR;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDBONRECEPTION($value) {
		$this->ID_BON_RECEPTION = $value;
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
	public function setIDSAISIEACHAT($value) {
		$this->ID_SAISIE_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDFACTUREFOURNISSEUR($value) {
		$this->ID_FACTURE_FOURNISSEUR = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}