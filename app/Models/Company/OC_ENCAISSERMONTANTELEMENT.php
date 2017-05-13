<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ENCAISSERMONTANTELEMENT
 */
class OC_ENCAISSERMONTANTELEMENT extends OC_BASE_MODEL
{
    protected $table = 'ENCAISSER_MONTANT_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_ECHEANCE_CLIENT',
        'ID_MOUVEMENT_ECHEANCE',
        'ID_ENCAISSER_MONTANT',
        'MONTANT_REGLE',
        'MONTANT_A_REGLER',
        'ARCHIVE',
        'ORDRE',
        'DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDECHEANCECLIENT() {
		return $this->ID_ECHEANCE_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOUVEMENTECHEANCE() {
		return $this->ID_MOUVEMENT_ECHEANCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDENCAISSERMONTANT() {
		return $this->ID_ENCAISSER_MONTANT;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTREGLE() {
		return $this->MONTANT_REGLE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTAREGLER() {
		return $this->MONTANT_A_REGLER;
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
	public function getDATE() {
		return $this->DATE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDECHEANCECLIENT($value) {
		$this->ID_ECHEANCE_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOUVEMENTECHEANCE($value) {
		$this->ID_MOUVEMENT_ECHEANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDENCAISSERMONTANT($value) {
		$this->ID_ENCAISSER_MONTANT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTREGLE($value) {
		$this->MONTANT_REGLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTAREGLER($value) {
		$this->MONTANT_A_REGLER = $value;
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
	public function setDATE($value) {
		$this->DATE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}