<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ARTICLE
 */
class OC_ARTICLE extends OC_BASE_MODEL
{
    protected $table = 'ARTICLE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'PRIX_METRIQUE_VT_1',
        'ARCHIVE',
        'PV_TTC',
        'POIDS',
        'ID_METRIQUE_3',
        'PRIX_METRIQUE_HA_2',
        'NOM',
        'CREATION_DATE',
        'PRIX_METRIQUE_HA_3',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'PA_HT',
        'ID_TAXE',
        'VALEUR_METRIQUE_2',
        'SERVICE',
        'ID_METRIQUE_2',
        'CREATION_AUTO',
        'ORDRE',
        'PRIX_METRIQUE_HA_1',
        'ID_STOCK',
        'ID_MODE_VENTE_ARTICLE',
        'PV_HT',
        'PRIX_METRIQUE_VT_2',
        'ID_METRIQUE_1',
        'VALEUR_METRIQUE_1',
        'VALEUR_METRIQUE_3',
        'CODE',
        'MODIFICATION_DATE',
        'PRIX_METRIQUE_VT_3',
        'OBSOLETE',
        'ID_FAMILLE_ARTICLE',
        'INFOS',
        'QTE_ACHAT',
        'DESCRIPTIF',
        'CODE_BARRE',
        'GESTION_STOCK',
        'CODE_DOUANIER',
        'QTE_MIN',
        'ID_DEVISE',
        'ID_FOURNISSEUR',
        'PV_U_DEVISE',
        'ID_DEVISE_HA',
        'PA_DEVISE',
        'ID_PAYS',
        'ID_UNITE_VENTE',
        'ID_COMPTE_PCE',
        'ID_COMPTE_PCE_ACHAT',
        'SKU'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getPRIXMETRIQUEVT1() {
		return $this->PRIX_METRIQUE_VT_1;
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
	public function getPVTTC() {
		return $this->PV_TTC;
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
	public function getIDMETRIQUE3() {
		return $this->ID_METRIQUE_3;
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
	public function getPRIXMETRIQUEHA3() {
		return $this->PRIX_METRIQUE_HA_3;
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
	public function getPAHT() {
		return $this->PA_HT;
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
	public function getVALEURMETRIQUE2() {
		return $this->VALEUR_METRIQUE_2;
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
	public function getIDMETRIQUE2() {
		return $this->ID_METRIQUE_2;
	}

	/**
	 * @return mixed
	 */
	public function getCREATIONAUTO() {
		return $this->CREATION_AUTO;
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
	public function getPRIXMETRIQUEHA1() {
		return $this->PRIX_METRIQUE_HA_1;
	}

	/**
	 * @return mixed
	 */
	public function getIDSTOCK() {
		return $this->ID_STOCK;
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
	public function getPVHT() {
		return $this->PV_HT;
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
	public function getIDMETRIQUE1() {
		return $this->ID_METRIQUE_1;
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
	public function getVALEURMETRIQUE3() {
		return $this->VALEUR_METRIQUE_3;
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
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
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
	public function getOBSOLETE() {
		return $this->OBSOLETE;
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
	public function getINFOS() {
		return $this->INFOS;
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
	public function getDESCRIPTIF() {
		return $this->DESCRIPTIF;
	}

	/**
	 * @return mixed
	 */
	public function getCODEBARRE() {
		return $this->CODE_BARRE;
	}

	/**
	 * @return mixed
	 */
	public function getGESTIONSTOCK() {
		return $this->GESTION_STOCK;
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
	public function getQTEMIN() {
		return $this->QTE_MIN;
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
	public function getIDFOURNISSEUR() {
		return $this->ID_FOURNISSEUR;
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
	public function getIDDEVISEHA() {
		return $this->ID_DEVISE_HA;
	}

	/**
	 * @return mixed
	 */
	public function getPADEVISE() {
		return $this->PA_DEVISE;
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
	public function getIDUNITEVENTE() {
		return $this->ID_UNITE_VENTE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCE() {
		return $this->ID_COMPTE_PCE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCEACHAT() {
		return $this->ID_COMPTE_PCE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getSKU() {
		return $this->SKU;
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
	public function setARCHIVE($value) {
		$this->ARCHIVE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPVTTC($value) {
		$this->PV_TTC = $value;
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
	public function setIDMETRIQUE3($value) {
		$this->ID_METRIQUE_3 = $value;
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
	public function setPRIXMETRIQUEHA3($value) {
		$this->PRIX_METRIQUE_HA_3 = $value;
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
	public function setPAHT($value) {
		$this->PA_HT = $value;
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
	public function setVALEURMETRIQUE2($value) {
		$this->VALEUR_METRIQUE_2 = $value;
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
	public function setIDMETRIQUE2($value) {
		$this->ID_METRIQUE_2 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREATIONAUTO($value) {
		$this->CREATION_AUTO = $value;
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
	public function setPRIXMETRIQUEHA1($value) {
		$this->PRIX_METRIQUE_HA_1 = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSTOCK($value) {
		$this->ID_STOCK = $value;
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
	public function setPVHT($value) {
		$this->PV_HT = $value;
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
	public function setIDMETRIQUE1($value) {
		$this->ID_METRIQUE_1 = $value;
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
	public function setVALEURMETRIQUE3($value) {
		$this->VALEUR_METRIQUE_3 = $value;
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
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
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
	public function setOBSOLETE($value) {
		$this->OBSOLETE = $value;
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
	public function setINFOS($value) {
		$this->INFOS = $value;
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
	public function setDESCRIPTIF($value) {
		$this->DESCRIPTIF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEBARRE($value) {
		$this->CODE_BARRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setGESTIONSTOCK($value) {
		$this->GESTION_STOCK = $value;
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
	public function setQTEMIN($value) {
		$this->QTE_MIN = $value;
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
	public function setIDFOURNISSEUR($value) {
		$this->ID_FOURNISSEUR = $value;
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
	public function setIDDEVISEHA($value) {
		$this->ID_DEVISE_HA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPADEVISE($value) {
		$this->PA_DEVISE = $value;
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
	public function setIDUNITEVENTE($value) {
		$this->ID_UNITE_VENTE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCE($value) {
		$this->ID_COMPTE_PCE = $value;
		return $this;
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
	public function setSKU($value) {
		$this->SKU = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}