<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_BONDELIVRAISON
 */
class OC_BONDELIVRAISON extends OC_BASE_MODEL
{
    protected $table = 'BON_DE_LIVRAISON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ARCHIVE',
        'ORDRE',
        'DATE',
        'ID_SAISIE_VENTE_FACTURE',
        'NUMERO',
        'ID_CLIENT',
        'INFOS',
        'TOTAL_HT',
        'TOTAL_TVA',
        'TOTAL_TTC',
        'TOTAL_POIDS',
        'ID_COMMANDE_CLIENT',
        'NOM',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'SOURCE',
        'IDSOURCE',
        'T_DEVISE',
        'T_POIDS',
        'ID_TARIF',
        'ID_MODELE',
        'DATE_LIVRAISON',
        'ID_ADRESSE',
        'ID_ADRESSE_LIVRAISON',
        'POURCENT_REMISE',
        'MONTANT_REMISE',
        'ID_CONTACT',
        'ID_CLIENT_DEPARTEMENT',
        'TOTAL_DEVISE',
        'TOTAL_SERVICE',
        'ID_TAXE_PORT',
        'PORT_HT',
        'REMISE_HT',
        'CREATE_VIRTUAL_STOCK',
        'ID_AFFAIRE'
    ];

    protected $guarded = [];

    
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
	 * @return mixed
	 */
	public function getIDSAISIEVENTEFACTURE() {
		return $this->ID_SAISIE_VENTE_FACTURE;
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
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
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
	public function getTOTALHT() {
		return $this->TOTAL_HT;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALTVA() {
		return $this->TOTAL_TVA;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALTTC() {
		return $this->TOTAL_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALPOIDS() {
		return $this->TOTAL_POIDS;
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
	public function getNOM() {
		return $this->NOM;
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
	public function getTDEVISE() {
		return $this->T_DEVISE;
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
	public function getDATELIVRAISON() {
		return $this->DATE_LIVRAISON;
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
	public function getTOTALDEVISE() {
		return $this->TOTAL_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALSERVICE() {
		return $this->TOTAL_SERVICE;
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
	public function getCREATEVIRTUALSTOCK() {
		return $this->CREATE_VIRTUAL_STOCK;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
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
	public function setINFOS($value) {
		$this->INFOS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALHT($value) {
		$this->TOTAL_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALTVA($value) {
		$this->TOTAL_TVA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALTTC($value) {
		$this->TOTAL_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALPOIDS($value) {
		$this->TOTAL_POIDS = $value;
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
	public function setNOM($value) {
		$this->NOM = $value;
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
	public function setTDEVISE($value) {
		$this->T_DEVISE = $value;
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
	public function setDATELIVRAISON($value) {
		$this->DATE_LIVRAISON = $value;
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
	public function setTOTALDEVISE($value) {
		$this->TOTAL_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALSERVICE($value) {
		$this->TOTAL_SERVICE = $value;
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
	public function setCREATEVIRTUALSTOCK($value) {
		$this->CREATE_VIRTUAL_STOCK = $value;
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

}