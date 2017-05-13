<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_DEVI
 */
class OC_DEVIS extends OC_BASE_MODEL
{
    protected $table = 'DEVIS';

    protected $primaryKey = 'ID_DEVIS';

	public $timestamps = false;

    protected $fillable = [
        'ID_DEVIS',
        'NUMERO',
        'DATE',
        'OBJET',
        'ID_COMMERCIAL',
        'ID_CLIENT',
        'T_HT',
        'T_TVA',
        'T_TTC',
        'PORT_HT',
        'REMISE_HT',
        'T_SERVICE',
        'ARCHIVE',
        'ORDRE',
        'INFOS',
        'ID_ETAT_DEVIS',
        'DATE_ENVOI',
        'T_POIDS',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'ID_ADRESSE',
        'DATE_VALIDITE',
        'T_DEVISE',
        'ID_TARIF',
        'ID_MODELE',
        'ID_ADRESSE_LIVRAISON',
        'POURCENT_REMISE',
        'MONTANT_REMISE',
        'ID_CONTACT',
        'ID_CLIENT_DEPARTEMENT',
        'T_HA',
        'DUNNING_DATE',
        'ID_AFFAIRE'
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
	public function getNUMERO() {
		return $this->NUMERO;
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
	public function getOBJET() {
		return $this->OBJET;
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
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getTHT() {
		return $this->T_HT;
	}

	/**
	 * @return mixed
	 */
	public function getTTVA() {
		return $this->T_TVA;
	}

	/**
	 * @return mixed
	 */
	public function getTTTC() {
		return $this->T_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getPORTHT() {
		return $this->PORT_HT;
	}

	/**
	 * @return mixed
	 */
	public function getREMISEHT() {
		return $this->REMISE_HT;
	}

	/**
	 * @return mixed
	 */
	public function getTSERVICE() {
		return $this->T_SERVICE;
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
	public function getINFOS() {
		return $this->INFOS;
	}

	/**
	 * @return mixed
	 */
	public function getIDETATDEVIS() {
		return $this->ID_ETAT_DEVIS;
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
	public function getTPOIDS() {
		return $this->T_POIDS;
	}

	/**
	 * @return mixed
	 */
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
	}

	/**
	 * @return mixed
	 */
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDADRESSE() {
		return $this->ID_ADRESSE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEVALIDITE() {
		return $this->DATE_VALIDITE;
	}

	/**
	 * @return mixed
	 */
	public function getTDEVISE() {
		return $this->T_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getIDTARIF() {
		return $this->ID_TARIF;
	}

	/**
	 * @return mixed
	 */
	public function getIDMODELE() {
		return $this->ID_MODELE;
	}

	/**
	 * @return mixed
	 */
	public function getIDADRESSELIVRAISON() {
		return $this->ID_ADRESSE_LIVRAISON;
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
	public function getMONTANTREMISE() {
		return $this->MONTANT_REMISE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTACT() {
		return $this->ID_CONTACT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCLIENTDEPARTEMENT() {
		return $this->ID_CLIENT_DEPARTEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getTHA() {
		return $this->T_HA;
	}

	/**
	 * @return mixed
	 */
	public function getDUNNINGDATE() {
		return $this->DUNNING_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDAFFAIRE() {
		return $this->ID_AFFAIRE;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
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
	public function setOBJET($value) {
		$this->OBJET = $value;
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
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTHT($value) {
		$this->T_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTTVA($value) {
		$this->T_TVA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTTTC($value) {
		$this->T_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPORTHT($value) {
		$this->PORT_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setREMISEHT($value) {
		$this->REMISE_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTSERVICE($value) {
		$this->T_SERVICE = $value;
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
	public function setINFOS($value) {
		$this->INFOS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDETATDEVIS($value) {
		$this->ID_ETAT_DEVIS = $value;
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
	public function setTPOIDS($value) {
		$this->T_POIDS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONCREATE($value) {
		$this->ID_USER_COMMON_CREATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDADRESSE($value) {
		$this->ID_ADRESSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEVALIDITE($value) {
		$this->DATE_VALIDITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTDEVISE($value) {
		$this->T_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTARIF($value) {
		$this->ID_TARIF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODELE($value) {
		$this->ID_MODELE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDADRESSELIVRAISON($value) {
		$this->ID_ADRESSE_LIVRAISON = $value;
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
	public function setMONTANTREMISE($value) {
		$this->MONTANT_REMISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTACT($value) {
		$this->ID_CONTACT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCLIENTDEPARTEMENT($value) {
		$this->ID_CLIENT_DEPARTEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTHA($value) {
		$this->T_HA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDUNNINGDATE($value) {
		$this->DUNNING_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDAFFAIRE($value) {
		$this->ID_AFFAIRE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

	public function elements()
	{
		return $this->hasMany(OC_DEVISELEMENT::class, 'ID_DEVIS');
	}

	public function client()
	{
		return $this->belongsTo(OC_CLIENT::class, "ID_CLIENT");
	}

	public function contact()
	{
		return $this->belongsTo(OC_CONTACT::class, "ID_CONTACT");
	}
}