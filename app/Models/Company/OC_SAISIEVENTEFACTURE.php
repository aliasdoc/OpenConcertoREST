<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_SAISIEVENTEFACTURE
 */
class OC_SAISIEVENTEFACTURE extends OC_BASE_MODEL
{
    protected $table = 'SAISIE_VENTE_FACTURE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_DEVIS',
        'NOM',
        'DATE',
        'ID_COMMERCIAL',
        'ID_CLIENT',
        'T_HT',
        'T_TVA',
        'T_TTC',
        'PORT_HT',
        'REMISE_HT',
        'ID_TAXE',
        'ID_MOUVEMENT',
        'ARCHIVE',
        'ORDRE',
        'ID_MODE_REGLEMENT',
        'T_SERVICE',
        'NUMERO',
        'INFOS',
        'T_POIDS',
        'PREVISIONNELLE',
        'COMPLEMENT',
        'ID_AVOIR_CLIENT',
        'ID_COMPTE_PCE_SERVICE',
        'DATE_ENVOI',
        'DATE_REGLEMENT',
        'ACOMPTE',
        'POURCENT_ACOMPTE',
        'ENVOYE_EN_AFFACTURAGE',
        'DATE_ENVOI_AFFACTURAGE',
        'AFFACTURAGE',
        'ID_CONTACT',
        'TYPE_INTERVENTION',
        'ID_REFERENCE_CLIENT',
        'COMPTE_SERVICE_AUTO',
        'T_AVOIR_TTC',
        'REF_CLIENT',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'CREATION_DATE',
        'T_HA',
        'ID_ADRESSE',
        'ID_COMPTE_PCE_VENTE',
        'ID_MOIS_CCIP',
        'RETOUR_NATEXIS',
        'CONTROLE_TECHNIQUE',
        'T_DEVISE',
        'ID_TARIF',
        'ID_MODELE',
        'ID_TAXE_PORT',
        'POURCENT_FACTURABLE',
        'MONTANT_FACTURABLE',
        'SOLDE',
        'PARTIAL',
        'ID_ADRESSE_LIVRAISON',
        'POURCENT_REMISE',
        'MONTANT_REMISE',
        'ID_CLIENT_DEPARTEMENT',
        'CREATE_VIRTUAL_STOCK',
        'SOUMIS_TIMBRE_FISCAL',
        'TAUX_TIMBRE_FISCAL',
        'TOTAL_TIMBRE_FISCAL',
        'NET_A_PAYER',
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
	public function getNOM() {
		return $this->NOM;
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
	public function getIDTAXE() {
		return $this->ID_TAXE;
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
	public function getIDMODEREGLEMENT() {
		return $this->ID_MODE_REGLEMENT;
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
	public function getNUMERO() {
		return $this->NUMERO;
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
	public function getTPOIDS() {
		return $this->T_POIDS;
	}

	/**
	 * @return mixed
	 */
	public function getPREVISIONNELLE() {
		return $this->PREVISIONNELLE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPLEMENT() {
		return $this->COMPLEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDAVOIRCLIENT() {
		return $this->ID_AVOIR_CLIENT;
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
	public function getDATEENVOI() {
		return $this->DATE_ENVOI;
	}

	/**
	 * @return mixed
	 */
	public function getDATEREGLEMENT() {
		return $this->DATE_REGLEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getACOMPTE() {
		return $this->ACOMPTE;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENTACOMPTE() {
		return $this->POURCENT_ACOMPTE;
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
	public function getDATEENVOIAFFACTURAGE() {
		return $this->DATE_ENVOI_AFFACTURAGE;
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
	public function getIDCONTACT() {
		return $this->ID_CONTACT;
	}

	/**
	 * @return mixed
	 */
	public function getTYPEINTERVENTION() {
		return $this->TYPE_INTERVENTION;
	}

	/**
	 * @return mixed
	 */
	public function getIDREFERENCECLIENT() {
		return $this->ID_REFERENCE_CLIENT;
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
	public function getTAVOIRTTC() {
		return $this->T_AVOIR_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getREFCLIENT() {
		return $this->REF_CLIENT;
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
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
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
	public function getTHA() {
		return $this->T_HA;
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
	public function getIDCOMPTEPCEVENTE() {
		return $this->ID_COMPTE_PCE_VENTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOISCCIP() {
		return $this->ID_MOIS_CCIP;
	}

	/**
	 * @return mixed
	 */
	public function getRETOURNATEXIS() {
		return $this->RETOUR_NATEXIS;
	}

	/**
	 * @return mixed
	 */
	public function getCONTROLETECHNIQUE() {
		return $this->CONTROLE_TECHNIQUE;
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
	public function getIDTAXEPORT() {
		return $this->ID_TAXE_PORT;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENTFACTURABLE() {
		return $this->POURCENT_FACTURABLE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTFACTURABLE() {
		return $this->MONTANT_FACTURABLE;
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
	public function getPARTIAL() {
		return $this->PARTIAL;
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
	public function getCREATEVIRTUALSTOCK() {
		return $this->CREATE_VIRTUAL_STOCK;
	}

	/**
	 * @return mixed
	 */
	public function getSOUMISTIMBREFISCAL() {
		return $this->SOUMIS_TIMBRE_FISCAL;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXTIMBREFISCAL() {
		return $this->TAUX_TIMBRE_FISCAL;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALTIMBREFISCAL() {
		return $this->TOTAL_TIMBRE_FISCAL;
	}

	/**
	 * @return mixed
	 */
	public function getNETAPAYER() {
		return $this->NET_A_PAYER;
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
	public function setNOM($value) {
		$this->NOM = $value;
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
	public function setIDTAXE($value) {
		$this->ID_TAXE = $value;
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
	public function setIDMODEREGLEMENT($value) {
		$this->ID_MODE_REGLEMENT = $value;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
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
	public function setTPOIDS($value) {
		$this->T_POIDS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPREVISIONNELLE($value) {
		$this->PREVISIONNELLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPLEMENT($value) {
		$this->COMPLEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDAVOIRCLIENT($value) {
		$this->ID_AVOIR_CLIENT = $value;
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
	public function setDATEENVOI($value) {
		$this->DATE_ENVOI = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEREGLEMENT($value) {
		$this->DATE_REGLEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setACOMPTE($value) {
		$this->ACOMPTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENTACOMPTE($value) {
		$this->POURCENT_ACOMPTE = $value;
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
	public function setDATEENVOIAFFACTURAGE($value) {
		$this->DATE_ENVOI_AFFACTURAGE = $value;
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
	public function setIDCONTACT($value) {
		$this->ID_CONTACT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTYPEINTERVENTION($value) {
		$this->TYPE_INTERVENTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDREFERENCECLIENT($value) {
		$this->ID_REFERENCE_CLIENT = $value;
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
	public function setTAVOIRTTC($value) {
		$this->T_AVOIR_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setREFCLIENT($value) {
		$this->REF_CLIENT = $value;
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
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
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
	public function setTHA($value) {
		$this->T_HA = $value;
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
	public function setIDCOMPTEPCEVENTE($value) {
		$this->ID_COMPTE_PCE_VENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOISCCIP($value) {
		$this->ID_MOIS_CCIP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRETOURNATEXIS($value) {
		$this->RETOUR_NATEXIS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCONTROLETECHNIQUE($value) {
		$this->CONTROLE_TECHNIQUE = $value;
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
	public function setIDTAXEPORT($value) {
		$this->ID_TAXE_PORT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENTFACTURABLE($value) {
		$this->POURCENT_FACTURABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTFACTURABLE($value) {
		$this->MONTANT_FACTURABLE = $value;
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
	public function setPARTIAL($value) {
		$this->PARTIAL = $value;
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
	public function setCREATEVIRTUALSTOCK($value) {
		$this->CREATE_VIRTUAL_STOCK = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOUMISTIMBREFISCAL($value) {
		$this->SOUMIS_TIMBRE_FISCAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXTIMBREFISCAL($value) {
		$this->TAUX_TIMBRE_FISCAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALTIMBREFISCAL($value) {
		$this->TOTAL_TIMBRE_FISCAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNETAPAYER($value) {
		$this->NET_A_PAYER = $value;
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