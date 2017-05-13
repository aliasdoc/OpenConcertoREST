<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_AVOIRCLIENT
 */
class OC_AVOIRCLIENT extends OC_BASE_MODEL
{
    protected $table = 'AVOIR_CLIENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'MONTANT_SOLDE',
        'SOLDE',
        'ID_MOUVEMENT',
        'MONTANT_SERVICE',
        'ID_MODE_REGLEMENT',
        'MOTIF',
        'ENVOYE_EN_AFFACTURAGE',
        'REMISE_HT',
        'ID_COMMERCIAL',
        'NOM',
        'CREATION_DATE',
        'MONTANT_TTC',
        'MONTANT_HT',
        'PORT_HT',
        'ID_ADRESSE',
        'MODIFICATION_DATE',
        'ID_COMPTE_PCE_SERVICE',
        'ID_USER_COMMON_MODIFY',
        'DATE_ENVOI_AFFACTURAGE',
        'ID_CLIENT',
        'ID_CONTACT',
        'DATE',
        'AFFACTURE',
        'MONTANT_TVA',
        'ID_SAISIE_VENTE_FACTURE',
        'COMPTE_SERVICE_AUTO',
        'AFFACTURAGE',
        'A_DEDUIRE',
        'ID_TAXE',
        'MONTANT_RESTANT',
        'ID_USER_COMMON_CREATE',
        'ORDRE',
        'ARCHIVE',
        'NUMERO',
        'T_DEVISE',
        'T_POIDS',
        'ID_TARIF',
        'ID_MODELE',
        'INFOS',
        'ID_ADRESSE_LIVRAISON',
        'POURCENT_REMISE',
        'MONTANT_REMISE',
        'ID_CLIENT_DEPARTEMENT',
        'ID_AFFAIRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getMONTANTSOLDE() {
		return $this->MONTANT_SOLDE;
	}

	/**
	 * @return mixed
	 */
	public function getSOLDE() {
		return $this->SOLDE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOUVEMENT() {
		return $this->ID_MOUVEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTSERVICE() {
		return $this->MONTANT_SERVICE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMODEREGLEMENT() {
		return $this->ID_MODE_REGLEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getMOTIF() {
		return $this->MOTIF;
	}

	/**
	 * @return mixed
	 */
	public function getENVOYEENAFFACTURAGE() {
		return $this->ENVOYE_EN_AFFACTURAGE;
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
	public function getIDCOMMERCIAL() {
		return $this->ID_COMMERCIAL;
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
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTTTC() {
		return $this->MONTANT_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTHT() {
		return $this->MONTANT_HT;
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
	public function getIDADRESSE() {
		return $this->ID_ADRESSE;
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
	public function getIDCOMPTEPCESERVICE() {
		return $this->ID_COMPTE_PCE_SERVICE;
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
	public function getDATEENVOIAFFACTURAGE() {
		return $this->DATE_ENVOI_AFFACTURAGE;
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
	public function getIDCONTACT() {
		return $this->ID_CONTACT;
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
	public function getAFFACTURE() {
		return $this->AFFACTURE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTTVA() {
		return $this->MONTANT_TVA;
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
	public function getCOMPTESERVICEAUTO() {
		return $this->COMPTE_SERVICE_AUTO;
	}

	/**
	 * @return mixed
	 */
	public function getAFFACTURAGE() {
		return $this->AFFACTURAGE;
	}

	/**
	 * @return mixed
	 */
	public function getADEDUIRE() {
		return $this->A_DEDUIRE;
	}

	/**
	 * @return mixed
	 */
	public function getIDTAXE() {
		return $this->ID_TAXE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTRESTANT() {
		return $this->MONTANT_RESTANT;
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
	public function getORDRE() {
		return $this->ORDRE;
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
	public function getNUMERO() {
		return $this->NUMERO;
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
	public function getINFOS() {
		return $this->INFOS;
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
	public function getIDCLIENTDEPARTEMENT() {
		return $this->ID_CLIENT_DEPARTEMENT;
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
	public function setMONTANTSOLDE($value) {
		$this->MONTANT_SOLDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOLDE($value) {
		$this->SOLDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOUVEMENT($value) {
		$this->ID_MOUVEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTSERVICE($value) {
		$this->MONTANT_SERVICE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODEREGLEMENT($value) {
		$this->ID_MODE_REGLEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMOTIF($value) {
		$this->MOTIF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setENVOYEENAFFACTURAGE($value) {
		$this->ENVOYE_EN_AFFACTURAGE = $value;
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
	public function setIDCOMMERCIAL($value) {
		$this->ID_COMMERCIAL = $value;
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
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTTTC($value) {
		$this->MONTANT_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTHT($value) {
		$this->MONTANT_HT = $value;
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
	public function setIDADRESSE($value) {
		$this->ID_ADRESSE = $value;
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
	public function setIDCOMPTEPCESERVICE($value) {
		$this->ID_COMPTE_PCE_SERVICE = $value;
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
	public function setDATEENVOIAFFACTURAGE($value) {
		$this->DATE_ENVOI_AFFACTURAGE = $value;
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
	public function setIDCONTACT($value) {
		$this->ID_CONTACT = $value;
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
	public function setAFFACTURE($value) {
		$this->AFFACTURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTTVA($value) {
		$this->MONTANT_TVA = $value;
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
	public function setCOMPTESERVICEAUTO($value) {
		$this->COMPTE_SERVICE_AUTO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAFFACTURAGE($value) {
		$this->AFFACTURAGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setADEDUIRE($value) {
		$this->A_DEDUIRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTAXE($value) {
		$this->ID_TAXE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTRESTANT($value) {
		$this->MONTANT_RESTANT = $value;
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
	public function setORDRE($value) {
		$this->ORDRE = $value;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
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
	public function setINFOS($value) {
		$this->INFOS = $value;
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
	public function setIDCLIENTDEPARTEMENT($value) {
		$this->ID_CLIENT_DEPARTEMENT = $value;
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