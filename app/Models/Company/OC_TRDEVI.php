<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TRDEVI
 */
class OC_TRDEVI extends OC_BASE_MODEL
{
    protected $table = 'TR_DEVIS';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_DEVIS',
        'ARCHIVE',
        'ORDRE',
        'ID_COMMANDE_CLIENT',
        'ID_SAISIE_VENTE_FACTURE',
        'ID_COMMANDE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDDEVIS() {
		return $this->ID_DEVIS;
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
	public function getIDCOMMANDECLIENT() {
		return $this->ID_COMMANDE_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDSAISIEVENTEFACTURE() {
		return $this->ID_SAISIE_VENTE_FACTURE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMMANDE() {
		return $this->ID_COMMANDE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDEVIS($value) {
		$this->ID_DEVIS = $value;
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
	public function setIDCOMMANDECLIENT($value) {
		$this->ID_COMMANDE_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSAISIEVENTEFACTURE($value) {
		$this->ID_SAISIE_VENTE_FACTURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMMANDE($value) {
		$this->ID_COMMANDE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}