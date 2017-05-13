<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ASSOCIATIONANALYTIQUE
 */
class OC_ASSOCIATIONANALYTIQUE extends OC_BASE_MODEL
{
    protected $table = 'ASSOCIATION_ANALYTIQUE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_ECRITURE',
        'ID_SAISIE_KM_ELEMENT',
        'ID_POSTE_ANALYTIQUE',
        'POURCENT',
        'MONTANT',
        'GESTION_AUTO',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDECRITURE() {
		return $this->ID_ECRITURE;
	}

	/**
	 * @return mixed
	 */
	public function getIDSAISIEKMELEMENT() {
		return $this->ID_SAISIE_KM_ELEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDPOSTEANALYTIQUE() {
		return $this->ID_POSTE_ANALYTIQUE;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENT() {
		return $this->POURCENT;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANT() {
		return $this->MONTANT;
	}

	/**
	 * @return mixed
	 */
	public function getGESTIONAUTO() {
		return $this->GESTION_AUTO;
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
	public function setIDECRITURE($value) {
		$this->ID_ECRITURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSAISIEKMELEMENT($value) {
		$this->ID_SAISIE_KM_ELEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPOSTEANALYTIQUE($value) {
		$this->ID_POSTE_ANALYTIQUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENT($value) {
		$this->POURCENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANT($value) {
		$this->MONTANT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setGESTIONAUTO($value) {
		$this->GESTION_AUTO = $value;
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