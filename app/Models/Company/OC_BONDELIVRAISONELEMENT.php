<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_BONDELIVRAISONELEMENT
 */
class OC_BONDELIVRAISONELEMENT extends OC_BASE_MODEL
{
    protected $table = 'BON_DE_LIVRAISON_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'T_POIDS',
        'NOM',
        'T_PV_HT',
        'PRIX_METRIQUE_HA_1',
        'ID_METRIQUE_3',
        'PV_HT',
        'ID_MODE_VENTE_ARTICLE',
        'ID_USER_COMMON_MODIFY',
        'ID_METRIQUE_1',
        'VALEUR_METRIQUE_3',
        'SERVICE',
        'VALEUR_METRIQUE_2',
        'ID_BON_DE_LIVRAISON',
        'CREATION_DATE',
        'PRIX_METRIQUE_VT_3',
        'PRIX_METRIQUE_HA_3',
        'QTE_A_LIVRER',
        'ID_METRIQUE_2',
        'PRIX_METRIQUE_VT_1',
        'QTE',
        'T_PV_TTC',
        'T_PA_HT',
        'MODIFICATION_DATE',
        'ID_STYLE',
        'VALEUR_METRIQUE_1',
        'PRIX_METRIQUE_VT_2',
        'CODE',
        'POIDS',
        'ID_USER_COMMON_CREATE',
        'T_POIDS_LIVREE',
        'PA_HT',
        'ID_SAISIE_VENTE_FACTURE_ELEMENT',
        'QTE_LIVREE',
        'ORDRE',
        'ID_TAXE',
        'PRIX_METRIQUE_HA_2',
        'ARCHIVE',
        'QTE_ACHAT',
        'CODE_DOUANIER',
        'ID_PAYS',
        'ID_DEVISE',
        'PV_U_DEVISE',
        'POURCENT_REMISE',
        'PV_T_DEVISE',
        'TAUX_DEVISE',
        'DESCRIPTIF',
        'MARGE_HT',
        'QTE_UNITAIRE',
        'ID_UNITE_VENTE',
        'ID_ARTICLE',
        'POIDS_COLIS_NET',
        'T_POIDS_COLIS_NET',
        'NB_COLIS',
        'MONTANT_REMISE',
        'ID_FAMILLE_ARTICLE',
        'NIVEAU'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getTPOIDS() {
		return $this->T_POIDS;
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
	public function getTPVHT() {
		return $this->T_PV_HT;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEHA1() {
		return $this->PRIX_METRIQUE_HA_1;
	}

	/**
	 * @return mixed
	 */
	public function getIDMETRIQUE3() {
		return $this->ID_METRIQUE_3;
	}

	/**
	 * @return mixed
	 */
	public function getPVHT() {
		return $this->PV_HT;
	}

	/**
	 * @return mixed
	 */
	public function getIDMODEVENTEARTICLE() {
		return $this->ID_MODE_VENTE_ARTICLE;
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
	public function getIDMETRIQUE1() {
		return $this->ID_METRIQUE_1;
	}

	/**
	 * @return mixed
	 */
	public function getVALEURMETRIQUE3() {
		return $this->VALEUR_METRIQUE_3;
	}

	/**
	 * @return mixed
	 */
	public function getSERVICE() {
		return $this->SERVICE;
	}

	/**
	 * @return mixed
	 */
	public function getVALEURMETRIQUE2() {
		return $this->VALEUR_METRIQUE_2;
	}

	/**
	 * @return mixed
	 */
	public function getIDBONDELIVRAISON() {
		return $this->ID_BON_DE_LIVRAISON;
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
	public function getPRIXMETRIQUEVT3() {
		return $this->PRIX_METRIQUE_VT_3;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEHA3() {
		return $this->PRIX_METRIQUE_HA_3;
	}

	/**
	 * @return mixed
	 */
	public function getQTEALIVRER() {
		return $this->QTE_A_LIVRER;
	}

	/**
	 * @return mixed
	 */
	public function getIDMETRIQUE2() {
		return $this->ID_METRIQUE_2;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEVT1() {
		return $this->PRIX_METRIQUE_VT_1;
	}

	/**
	 * @return mixed
	 */
	public function getQTE() {
		return $this->QTE;
	}

	/**
	 * @return mixed
	 */
	public function getTPVTTC() {
		return $this->T_PV_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getTPAHT() {
		return $this->T_PA_HT;
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
	public function getIDSTYLE() {
		return $this->ID_STYLE;
	}

	/**
	 * @return mixed
	 */
	public function getVALEURMETRIQUE1() {
		return $this->VALEUR_METRIQUE_1;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEVT2() {
		return $this->PRIX_METRIQUE_VT_2;
	}

	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getPOIDS() {
		return $this->POIDS;
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
	public function getTPOIDSLIVREE() {
		return $this->T_POIDS_LIVREE;
	}

	/**
	 * @return mixed
	 */
	public function getPAHT() {
		return $this->PA_HT;
	}

	/**
	 * @return mixed
	 */
	public function getIDSAISIEVENTEFACTUREELEMENT() {
		return $this->ID_SAISIE_VENTE_FACTURE_ELEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getQTELIVREE() {
		return $this->QTE_LIVREE;
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
	public function getIDTAXE() {
		return $this->ID_TAXE;
	}

	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEHA2() {
		return $this->PRIX_METRIQUE_HA_2;
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
	public function getQTEACHAT() {
		return $this->QTE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getCODEDOUANIER() {
		return $this->CODE_DOUANIER;
	}

	/**
	 * @return mixed
	 */
	public function getIDPAYS() {
		return $this->ID_PAYS;
	}

	/**
	 * @return mixed
	 */
	public function getIDDEVISE() {
		return $this->ID_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getPVUDEVISE() {
		return $this->PV_U_DEVISE;
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
	public function getPVTDEVISE() {
		return $this->PV_T_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXDEVISE() {
		return $this->TAUX_DEVISE;
	}

	/**
	 * @return mixed
	 */
	public function getDESCRIPTIF() {
		return $this->DESCRIPTIF;
	}

	/**
	 * @return mixed
	 */
	public function getMARGEHT() {
		return $this->MARGE_HT;
	}

	/**
	 * @return mixed
	 */
	public function getQTEUNITAIRE() {
		return $this->QTE_UNITAIRE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUNITEVENTE() {
		return $this->ID_UNITE_VENTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDARTICLE() {
		return $this->ID_ARTICLE;
	}

	/**
	 * @return mixed
	 */
	public function getPOIDSCOLISNET() {
		return $this->POIDS_COLIS_NET;
	}

	/**
	 * @return mixed
	 */
	public function getTPOIDSCOLISNET() {
		return $this->T_POIDS_COLIS_NET;
	}

	/**
	 * @return mixed
	 */
	public function getNBCOLIS() {
		return $this->NB_COLIS;
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
	public function getIDFAMILLEARTICLE() {
		return $this->ID_FAMILLE_ARTICLE;
	}

	/**
	 * @return mixed
	 */
	public function getNIVEAU() {
		return $this->NIVEAU;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTPVHT($value) {
		$this->T_PV_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEHA1($value) {
		$this->PRIX_METRIQUE_HA_1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMETRIQUE3($value) {
		$this->ID_METRIQUE_3 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPVHT($value) {
		$this->PV_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODEVENTEARTICLE($value) {
		$this->ID_MODE_VENTE_ARTICLE = $value;
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
	public function setIDMETRIQUE1($value) {
		$this->ID_METRIQUE_1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALEURMETRIQUE3($value) {
		$this->VALEUR_METRIQUE_3 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSERVICE($value) {
		$this->SERVICE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALEURMETRIQUE2($value) {
		$this->VALEUR_METRIQUE_2 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDBONDELIVRAISON($value) {
		$this->ID_BON_DE_LIVRAISON = $value;
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
	public function setPRIXMETRIQUEVT3($value) {
		$this->PRIX_METRIQUE_VT_3 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEHA3($value) {
		$this->PRIX_METRIQUE_HA_3 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTEALIVRER($value) {
		$this->QTE_A_LIVRER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMETRIQUE2($value) {
		$this->ID_METRIQUE_2 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEVT1($value) {
		$this->PRIX_METRIQUE_VT_1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTE($value) {
		$this->QTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTPVTTC($value) {
		$this->T_PV_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTPAHT($value) {
		$this->T_PA_HT = $value;
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
	public function setIDSTYLE($value) {
		$this->ID_STYLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALEURMETRIQUE1($value) {
		$this->VALEUR_METRIQUE_1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEVT2($value) {
		$this->PRIX_METRIQUE_VT_2 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOIDS($value) {
		$this->POIDS = $value;
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
	public function setTPOIDSLIVREE($value) {
		$this->T_POIDS_LIVREE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPAHT($value) {
		$this->PA_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSAISIEVENTEFACTUREELEMENT($value) {
		$this->ID_SAISIE_VENTE_FACTURE_ELEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTELIVREE($value) {
		$this->QTE_LIVREE = $value;
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
	public function setIDTAXE($value) {
		$this->ID_TAXE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIXMETRIQUEHA2($value) {
		$this->PRIX_METRIQUE_HA_2 = $value;
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
	public function setQTEACHAT($value) {
		$this->QTE_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEDOUANIER($value) {
		$this->CODE_DOUANIER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPAYS($value) {
		$this->ID_PAYS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDEVISE($value) {
		$this->ID_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPVUDEVISE($value) {
		$this->PV_U_DEVISE = $value;
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
	public function setPVTDEVISE($value) {
		$this->PV_T_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXDEVISE($value) {
		$this->TAUX_DEVISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDESCRIPTIF($value) {
		$this->DESCRIPTIF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMARGEHT($value) {
		$this->MARGE_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQTEUNITAIRE($value) {
		$this->QTE_UNITAIRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUNITEVENTE($value) {
		$this->ID_UNITE_VENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDARTICLE($value) {
		$this->ID_ARTICLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOIDSCOLISNET($value) {
		$this->POIDS_COLIS_NET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTPOIDSCOLISNET($value) {
		$this->T_POIDS_COLIS_NET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNBCOLIS($value) {
		$this->NB_COLIS = $value;
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
	public function setIDFAMILLEARTICLE($value) {
		$this->ID_FAMILLE_ARTICLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNIVEAU($value) {
		$this->NIVEAU = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}