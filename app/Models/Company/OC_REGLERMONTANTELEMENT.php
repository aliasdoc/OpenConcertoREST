<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_REGLERMONTANTELEMENT
 */
class OC_REGLERMONTANTELEMENT extends OC_BASE_MODEL
{
    protected $table = 'REGLER_MONTANT_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_ECHEANCE_FOURNISSEUR',
        'ID_REGLER_MONTANT',
        'ID_MOUVEMENT_ECHEANCE',
        'DATE',
        'MONTANT_REGLE',
        'MONTANT_A_REGLER',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDECHEANCEFOURNISSEUR() {
		return $this->ID_ECHEANCE_FOURNISSEUR;
	}

	/**
	 * @return mixed
	 */
	public function getIDREGLERMONTANT() {
		return $this->ID_REGLER_MONTANT;
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
	public function getDATE() {
		return $this->DATE;
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
	 * @param $value
	 * @return $this
	 */
	public function setIDECHEANCEFOURNISSEUR($value) {
		$this->ID_ECHEANCE_FOURNISSEUR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDREGLERMONTANT($value) {
		$this->ID_REGLER_MONTANT = $value;
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
	public function setDATE($value) {
		$this->DATE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}