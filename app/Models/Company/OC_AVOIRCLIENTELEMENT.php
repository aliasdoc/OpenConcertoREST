<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_AVOIRCLIENTELEMENT
 */
class OC_AVOIRCLIENTELEMENT extends OC_BASE_MODEL
{
    protected $table = 'AVOIR_CLIENT_ELEMENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_STYLE',
        'CODE',
        'NOM',
        'PA_HT',
        'PV_HT',
        'ID_TAXE',
        'POIDS',
        'ARCHIVE',
        'ORDRE',
        'QTE',
        'ID_AVOIR_CLIENT',
        'SERVICE',
        'PRIX_METRIQUE_HA_1',
        'PRIX_METRIQUE_VT_1',
        'VALEUR_METRIQUE_1',
        'ID_METRIQUE_1',
        'PRIX_METRIQUE_HA_2',
        'PRIX_METRIQUE_VT_2',
        'VALEUR_METRIQUE_2',
        'ID_METRIQUE_2',
        'PRIX_METRIQUE_HA_3',
        'PRIX_METRIQUE_VT_3',
        'ID_METRIQUE_3',
        'VALEUR_METRIQUE_3',
        'T_PV_HT',
        'T_PA_HT',
        'T_PV_TTC',
        'T_POIDS',
        'ID_MODE_VENTE_ARTICLE',
        'OBJET_INSPECTE',
        'TARIF_Q18_HT',
        'INFOS_OBJET_INSPECTE',
        'Q18',
        'ID_CONTACT',
        'INDICE_0',
        'REFERENTIEL_INSPECTION',
        'CODE_MISSION',
        'POURCENT_SERVICE',
        'INDICE_N',
        'LOCAL_OBJET_INSPECTE',
        'MONTANT_INITIAL',
        'SOUS_ACTIVITE',
        'DATE_FIN',
        'ACTIVITE',
        'NOM_MISSION',
        'DATE',
        'MONTANT_REVISABLE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'CREATION_DATE',
        'ACOMPTE',
        'POURCENT_ACOMPTE',
        'POURCENT_REMISE',
        'SITUATION_ADMIN',
        'QTE_ACHAT',
        'CODE_DOUANIER',
        'ID_PAYS',
        'ID_DEVISE',
        'PV_U_DEVISE',
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
        'NIVEAU',
        'RETOUR_STOCK'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDSTYLE() {
		return $this->ID_STYLE;
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
	public function getNOM() {
		return $this->NOM;
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
	public function getPVHT() {
		return $this->PV_HT;
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
	public function getPOIDS() {
		return $this->POIDS;
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
	public function getQTE() {
		return $this->QTE;
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
	public function getSERVICE() {
		return $this->SERVICE;
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
	public function getPRIXMETRIQUEVT1() {
		return $this->PRIX_METRIQUE_VT_1;
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
	public function getIDMETRIQUE1() {
		return $this->ID_METRIQUE_1;
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
	public function getPRIXMETRIQUEVT2() {
		return $this->PRIX_METRIQUE_VT_2;
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
	public function getIDMETRIQUE2() {
		return $this->ID_METRIQUE_2;
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
	public function getPRIXMETRIQUEVT3() {
		return $this->PRIX_METRIQUE_VT_3;
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
	public function getVALEURMETRIQUE3() {
		return $this->VALEUR_METRIQUE_3;
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
	public function getTPAHT() {
		return $this->T_PA_HT;
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
	public function getTPOIDS() {
		return $this->T_POIDS;
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
	public function getOBJETINSPECTE() {
		return $this->OBJET_INSPECTE;
	}

	/**
	 * @return mixed
	 */
	public function getTARIFQ18HT() {
		return $this->TARIF_Q18_HT;
	}

	/**
	 * @return mixed
	 */
	public function getINFOSOBJETINSPECTE() {
		return $this->INFOS_OBJET_INSPECTE;
	}

	/**
	 * @return mixed
	 */
	public function getQ18() {
		return $this->Q18;
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
	public function getINDICE0() {
		return $this->INDICE_0;
	}

	/**
	 * @return mixed
	 */
	public function getREFERENTIELINSPECTION() {
		return $this->REFERENTIEL_INSPECTION;
	}

	/**
	 * @return mixed
	 */
	public function getCODEMISSION() {
		return $this->CODE_MISSION;
	}

	/**
	 * @return mixed
	 */
	public function getPOURCENTSERVICE() {
		return $this->POURCENT_SERVICE;
	}

	/**
	 * @return mixed
	 */
	public function getINDICEN() {
		return $this->INDICE_N;
	}

	/**
	 * @return mixed
	 */
	public function getLOCALOBJETINSPECTE() {
		return $this->LOCAL_OBJET_INSPECTE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTINITIAL() {
		return $this->MONTANT_INITIAL;
	}

	/**
	 * @return mixed
	 */
	public function getSOUSACTIVITE() {
		return $this->SOUS_ACTIVITE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFIN() {
		return $this->DATE_FIN;
	}

	/**
	 * @return mixed
	 */
	public function getACTIVITE() {
		return $this->ACTIVITE;
	}

	/**
	 * @return mixed
	 */
	public function getNOMMISSION() {
		return $this->NOM_MISSION;
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
	public function getMONTANTREVISABLE() {
		return $this->MONTANT_REVISABLE;
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
	public function getPOURCENTREMISE() {
		return $this->POURCENT_REMISE;
	}

	/**
	 * @return mixed
	 */
	public function getSITUATIONADMIN() {
		return $this->SITUATION_ADMIN;
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
	 * @return mixed
	 */
	public function getRETOURSTOCK() {
		return $this->RETOUR_STOCK;
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
	public function setCODE($value) {
		$this->CODE = $value;
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
	public function setPAHT($value) {
		$this->PA_HT = $value;
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
	public function setIDTAXE($value) {
		$this->ID_TAXE = $value;
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
	public function setQTE($value) {
		$this->QTE = $value;
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
	public function setSERVICE($value) {
		$this->SERVICE = $value;
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
	public function setPRIXMETRIQUEVT1($value) {
		$this->PRIX_METRIQUE_VT_1 = $value;
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
	public function setIDMETRIQUE1($value) {
		$this->ID_METRIQUE_1 = $value;
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
	public function setPRIXMETRIQUEVT2($value) {
		$this->PRIX_METRIQUE_VT_2 = $value;
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
	public function setIDMETRIQUE2($value) {
		$this->ID_METRIQUE_2 = $value;
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
	public function setPRIXMETRIQUEVT3($value) {
		$this->PRIX_METRIQUE_VT_3 = $value;
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
	public function setVALEURMETRIQUE3($value) {
		$this->VALEUR_METRIQUE_3 = $value;
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
	public function setTPAHT($value) {
		$this->T_PA_HT = $value;
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
	public function setTPOIDS($value) {
		$this->T_POIDS = $value;
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
	public function setOBJETINSPECTE($value) {
		$this->OBJET_INSPECTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTARIFQ18HT($value) {
		$this->TARIF_Q18_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINFOSOBJETINSPECTE($value) {
		$this->INFOS_OBJET_INSPECTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setQ18($value) {
		$this->Q18 = $value;
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
	public function setINDICE0($value) {
		$this->INDICE_0 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setREFERENTIELINSPECTION($value) {
		$this->REFERENTIEL_INSPECTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEMISSION($value) {
		$this->CODE_MISSION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOURCENTSERVICE($value) {
		$this->POURCENT_SERVICE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINDICEN($value) {
		$this->INDICE_N = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLOCALOBJETINSPECTE($value) {
		$this->LOCAL_OBJET_INSPECTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTINITIAL($value) {
		$this->MONTANT_INITIAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOUSACTIVITE($value) {
		$this->SOUS_ACTIVITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFIN($value) {
		$this->DATE_FIN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setACTIVITE($value) {
		$this->ACTIVITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOMMISSION($value) {
		$this->NOM_MISSION = $value;
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
	public function setMONTANTREVISABLE($value) {
		$this->MONTANT_REVISABLE = $value;
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
	public function setPOURCENTREMISE($value) {
		$this->POURCENT_REMISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSITUATIONADMIN($value) {
		$this->SITUATION_ADMIN = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRETOURSTOCK($value) {
		$this->RETOUR_STOCK = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}