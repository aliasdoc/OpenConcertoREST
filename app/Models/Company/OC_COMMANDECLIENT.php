<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_COMMANDECLIENT
 */
class OC_COMMANDECLIENT extends OC_BASE_MODEL
{
    protected $table = 'COMMANDE_CLIENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'SOURCE',
        'IDSOURCE',
        'DATE',
        'ID_CLIENT',
        'DATE_ECHEANCE',
        'NUMERO',
        'T_HT',
        'T_TVA',
        'T_TTC',
        'ARCHIVE',
        'ORDRE',
        'INFOS',
        'T_SERVICE',
        'ID_COMMERCIAL',
        'T_POIDS',
        'ID_DEVIS',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'T_DEVISE',
        'ID_TARIF',
        'ID_MODELE',
        'ID_ADRESSE',
        'ID_ADRESSE_LIVRAISON',
        'POURCENT_REMISE',
        'MONTANT_REMISE',
        'ID_CONTACT',
        'ID_CLIENT_DEPARTEMENT',
        'ETAT_COMMANDE',
        'EMBALLAGE',
        'NUMERO_EXPEDITION',
        'ID_TAXE_PORT',
        'PORT_HT',
        'REMISE_HT',
        'TYPE_EXPEDITION',
        'ID_AFFAIRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getSOURCE() {
		return $this->SOURCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDSOURCE() {
		return $this->IDSOURCE;
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
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEECHEANCE() {
		return $this->DATE_ECHEANCE;
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
	public function getTSERVICE() {
		return $this->T_SERVICE;
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
	public function getTPOIDS() {
		return $this->T_POIDS;
	}

	/**
	 * @return mixed
	 */
	public function getIDDEVIS() {
		return $this->ID_DEVIS;
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
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
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
	public function getIDADRESSE() {
		return $this->ID_ADRESSE;
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
	public function getETATCOMMANDE() {
		return $this->ETAT_COMMANDE;
	}

	/**
	 * @return mixed
	 */
	public function getEMBALLAGE() {
		return $this->EMBALLAGE;
	}

	/**
	 * @return mixed
	 */
	public function getNUMEROEXPEDITION() {
		return $this->NUMERO_EXPEDITION;
	}

	/**
	 * @return mixed
	 */
	public function getIDTAXEPORT() {
		return $this->ID_TAXE_PORT;
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
	public function getTYPEEXPEDITION() {
		return $this->TYPE_EXPEDITION;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOURCE($value) {
		$this->SOURCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSOURCE($value) {
		$this->IDSOURCE = $value;
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
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEECHEANCE($value) {
		$this->DATE_ECHEANCE = $value;
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
	public function setTSERVICE($value) {
		$this->T_SERVICE = $value;
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
	public function setTPOIDS($value) {
		$this->T_POIDS = $value;
		return $this;
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
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
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
	public function setIDADRESSE($value) {
		$this->ID_ADRESSE = $value;
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
	public function setETATCOMMANDE($value) {
		$this->ETAT_COMMANDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setEMBALLAGE($value) {
		$this->EMBALLAGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMEROEXPEDITION($value) {
		$this->NUMERO_EXPEDITION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTAXEPORT($value) {
		$this->ID_TAXE_PORT = $value;
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
	public function setTYPEEXPEDITION($value) {
		$this->TYPE_EXPEDITION = $value;
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
		return $this->hasMany(OC_COMMANDECLIENTELEMENT::class, 'ID_COMMANDE_CLIENT');
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