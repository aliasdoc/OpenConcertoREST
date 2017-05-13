<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_PREFSCOMPTE
 */
class OC_PREFSCOMPTE extends OC_BASE_MODEL
{
    protected $table = 'PREFS_COMPTE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_COMPTE_PCE_ACHAT',
        'ID_COMPTE_PCE_TVA_ACHAT',
        'ID_COMPTE_PCE_FOURNISSEUR',
        'ID_COMPTE_PCE_VENTE_PRODUIT',
        'ID_COMPTE_PCE_TVA_VENTE',
        'ID_COMPTE_PCE_CLIENT',
        'ID_COMPTE_PCE_VENTE_SERVICE',
        'ID_COMPTE_PCE_ACOMPTE',
        'ID_COMPTE_PCE_ACOMPTE_REGL',
        'ID_COMPTE_PCE_PAYE',
        'ID_COMPTE_PCE_TVA_INTRA',
        'ID_COMPTE_PCE_TVA_IMMO',
        'ID_COMPTE_PCE_BILAN_O',
        'ID_COMPTE_PCE_RESULTAT',
        'ID_COMPTE_PCE_BILAN_F',
        'ID_COMPTE_PCE_ACHAT_INTRA',
        'ID_JOURNAL_FACTOR',
        'ID_COMPTE_PCE_FACTOR',
        'ID_COMPTE_PCE_RESULTAT_PERTE',
        'ID_COMPTE_PCE_PORT_SOUMIS',
        'ID_COMPTE_PCE_PORT_NON_SOUMIS'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACHAT() {
		return $this->ID_COMPTE_PCE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCETVAACHAT() {
		return $this->ID_COMPTE_PCE_TVA_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEFOURNISSEUR() {
		return $this->ID_COMPTE_PCE_FOURNISSEUR;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEVENTEPRODUIT() {
		return $this->ID_COMPTE_PCE_VENTE_PRODUIT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCETVAVENTE() {
		return $this->ID_COMPTE_PCE_TVA_VENTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCECLIENT() {
		return $this->ID_COMPTE_PCE_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEVENTESERVICE() {
		return $this->ID_COMPTE_PCE_VENTE_SERVICE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACOMPTE() {
		return $this->ID_COMPTE_PCE_ACOMPTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACOMPTEREGL() {
		return $this->ID_COMPTE_PCE_ACOMPTE_REGL;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEPAYE() {
		return $this->ID_COMPTE_PCE_PAYE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCETVAINTRA() {
		return $this->ID_COMPTE_PCE_TVA_INTRA;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCETVAIMMO() {
		return $this->ID_COMPTE_PCE_TVA_IMMO;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEBILANO() {
		return $this->ID_COMPTE_PCE_BILAN_O;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCERESULTAT() {
		return $this->ID_COMPTE_PCE_RESULTAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEBILANF() {
		return $this->ID_COMPTE_PCE_BILAN_F;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACHATINTRA() {
		return $this->ID_COMPTE_PCE_ACHAT_INTRA;
	}

	/**
	 * @return mixed
	 */
	public function getIDJOURNALFACTOR() {
		return $this->ID_JOURNAL_FACTOR;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEFACTOR() {
		return $this->ID_COMPTE_PCE_FACTOR;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCERESULTATPERTE() {
		return $this->ID_COMPTE_PCE_RESULTAT_PERTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEPORTSOUMIS() {
		return $this->ID_COMPTE_PCE_PORT_SOUMIS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEPORTNONSOUMIS() {
		return $this->ID_COMPTE_PCE_PORT_NON_SOUMIS;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEACHAT($value) {
		$this->ID_COMPTE_PCE_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCETVAACHAT($value) {
		$this->ID_COMPTE_PCE_TVA_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEFOURNISSEUR($value) {
		$this->ID_COMPTE_PCE_FOURNISSEUR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEVENTEPRODUIT($value) {
		$this->ID_COMPTE_PCE_VENTE_PRODUIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCETVAVENTE($value) {
		$this->ID_COMPTE_PCE_TVA_VENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCECLIENT($value) {
		$this->ID_COMPTE_PCE_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEVENTESERVICE($value) {
		$this->ID_COMPTE_PCE_VENTE_SERVICE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEACOMPTE($value) {
		$this->ID_COMPTE_PCE_ACOMPTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEACOMPTEREGL($value) {
		$this->ID_COMPTE_PCE_ACOMPTE_REGL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEPAYE($value) {
		$this->ID_COMPTE_PCE_PAYE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCETVAINTRA($value) {
		$this->ID_COMPTE_PCE_TVA_INTRA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCETVAIMMO($value) {
		$this->ID_COMPTE_PCE_TVA_IMMO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEBILANO($value) {
		$this->ID_COMPTE_PCE_BILAN_O = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCERESULTAT($value) {
		$this->ID_COMPTE_PCE_RESULTAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEBILANF($value) {
		$this->ID_COMPTE_PCE_BILAN_F = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEACHATINTRA($value) {
		$this->ID_COMPTE_PCE_ACHAT_INTRA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDJOURNALFACTOR($value) {
		$this->ID_JOURNAL_FACTOR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEFACTOR($value) {
		$this->ID_COMPTE_PCE_FACTOR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCERESULTATPERTE($value) {
		$this->ID_COMPTE_PCE_RESULTAT_PERTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEPORTSOUMIS($value) {
		$this->ID_COMPTE_PCE_PORT_SOUMIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCEPORTNONSOUMIS($value) {
		$this->ID_COMPTE_PCE_PORT_NON_SOUMIS = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}