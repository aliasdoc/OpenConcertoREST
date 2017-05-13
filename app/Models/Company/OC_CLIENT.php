<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CLIENT
 */
class OC_CLIENT extends OC_BASE_MODEL
{
    protected $table = 'CLIENT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'FORME_JURIDIQUE',
        'NOM',
        'CODE',
        'TEL',
        'MAIL',
        'FAX',
        'NUMERO_TVA',
        'ID_ADRESSE',
        'ARCHIVE',
        'ORDRE',
        'RESPONSABLE',
        'ID_ADRESSE_L',
        'INFOS',
        'TEL_P',
        'RESPONSABLE_TECH',
        'TEL_P_TECH',
        'TEL_TECH',
        'MAIL_TECH',
        'RESPONSABLE_COM',
        'TEL_P_COM',
        'MAIL_COM',
        'TEL_COM',
        'ID_MODE_REGLEMENT',
        'ID_ADRESSE_F',
        'FAX_TECH',
        'FAX_COM',
        'ID_COMPTE_PCE',
        'SIRET',
        'RIB',
        'MARCHE_PUBLIC',
        'MARCHE_PRIVE',
        'AFFACTURAGE',
        'MAX_FACTURE',
        'COMPTANT',
        'COMPTE_CLIENT_AUTO',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_MODIFY',
        'CREATION_DATE',
        'ID_TARIF',
        'ID_PAYS',
        'ID_LANGUE',
        'ID_DEVISE',
        'BLOQUE_LIVRAISON',
        'BLOQUE',
        'ID_COMPTE_PCE_SERVICE',
        'ID_COMPTE_PCE_PRODUIT',
        'ENCOURS_MAX',
        'CATEGORIES',
        'NOTE_FINANCIERE',
        'CENTRE_GESTION',
        'METHODE_RELANCE',
        'SITE_INTERNET',
        'GROUPE',
        'ID_COMMERCIAL',
        'TIMBRE_FISCAL',
        'OBSOLETE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getFORMEJURIDIQUE() {
		return $this->FORME_JURIDIQUE;
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
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getTEL() {
		return $this->TEL;
	}

	/**
	 * @return mixed
	 */
	public function getMAIL() {
		return $this->MAIL;
	}

	/**
	 * @return mixed
	 */
	public function getFAX() {
		return $this->FAX;
	}

	/**
	 * @return mixed
	 */
	public function getNUMEROTVA() {
		return $this->NUMERO_TVA;
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
	public function getRESPONSABLE() {
		return $this->RESPONSABLE;
	}

	/**
	 * @return mixed
	 */
	public function getIDADRESSEL() {
		return $this->ID_ADRESSE_L;
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
	public function getTELP() {
		return $this->TEL_P;
	}

	/**
	 * @return mixed
	 */
	public function getRESPONSABLETECH() {
		return $this->RESPONSABLE_TECH;
	}

	/**
	 * @return mixed
	 */
	public function getTELPTECH() {
		return $this->TEL_P_TECH;
	}

	/**
	 * @return mixed
	 */
	public function getTELTECH() {
		return $this->TEL_TECH;
	}

	/**
	 * @return mixed
	 */
	public function getMAILTECH() {
		return $this->MAIL_TECH;
	}

	/**
	 * @return mixed
	 */
	public function getRESPONSABLECOM() {
		return $this->RESPONSABLE_COM;
	}

	/**
	 * @return mixed
	 */
	public function getTELPCOM() {
		return $this->TEL_P_COM;
	}

	/**
	 * @return mixed
	 */
	public function getMAILCOM() {
		return $this->MAIL_COM;
	}

	/**
	 * @return mixed
	 */
	public function getTELCOM() {
		return $this->TEL_COM;
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
	public function getIDADRESSEF() {
		return $this->ID_ADRESSE_F;
	}

	/**
	 * @return mixed
	 */
	public function getFAXTECH() {
		return $this->FAX_TECH;
	}

	/**
	 * @return mixed
	 */
	public function getFAXCOM() {
		return $this->FAX_COM;
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
	public function getSIRET() {
		return $this->SIRET;
	}

	/**
	 * @return mixed
	 */
	public function getRIB() {
		return $this->RIB;
	}

	/**
	 * @return mixed
	 */
	public function getMARCHEPUBLIC() {
		return $this->MARCHE_PUBLIC;
	}

	/**
	 * @return mixed
	 */
	public function getMARCHEPRIVE() {
		return $this->MARCHE_PRIVE;
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
	public function getMAXFACTURE() {
		return $this->MAX_FACTURE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPTANT() {
		return $this->COMPTANT;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPTECLIENTAUTO() {
		return $this->COMPTE_CLIENT_AUTO;
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
	public function getIDTARIF() {
		return $this->ID_TARIF;
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
	public function getIDLANGUE() {
		return $this->ID_LANGUE;
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
	public function getBLOQUELIVRAISON() {
		return $this->BLOQUE_LIVRAISON;
	}

	/**
	 * @return mixed
	 */
	public function getBLOQUE() {
		return $this->BLOQUE;
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
	public function getIDCOMPTEPCEPRODUIT() {
		return $this->ID_COMPTE_PCE_PRODUIT;
	}

	/**
	 * @return mixed
	 */
	public function getENCOURSMAX() {
		return $this->ENCOURS_MAX;
	}

	/**
	 * @return mixed
	 */
	public function getCATEGORIES() {
		return $this->CATEGORIES;
	}

	/**
	 * @return mixed
	 */
	public function getNOTEFINANCIERE() {
		return $this->NOTE_FINANCIERE;
	}

	/**
	 * @return mixed
	 */
	public function getCENTREGESTION() {
		return $this->CENTRE_GESTION;
	}

	/**
	 * @return mixed
	 */
	public function getMETHODERELANCE() {
		return $this->METHODE_RELANCE;
	}

	/**
	 * @return mixed
	 */
	public function getSITEINTERNET() {
		return $this->SITE_INTERNET;
	}

	/**
	 * @return mixed
	 */
	public function getGROUPE() {
		return $this->GROUPE;
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
	public function getTIMBREFISCAL() {
		return $this->TIMBRE_FISCAL;
	}

	/**
	 * @return mixed
	 */
	public function getOBSOLETE() {
		return $this->OBSOLETE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setFORMEJURIDIQUE($value) {
		$this->FORME_JURIDIQUE = $value;
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
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTEL($value) {
		$this->TEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAIL($value) {
		$this->MAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFAX($value) {
		$this->FAX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMEROTVA($value) {
		$this->NUMERO_TVA = $value;
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
	public function setRESPONSABLE($value) {
		$this->RESPONSABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDADRESSEL($value) {
		$this->ID_ADRESSE_L = $value;
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
	public function setTELP($value) {
		$this->TEL_P = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRESPONSABLETECH($value) {
		$this->RESPONSABLE_TECH = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELPTECH($value) {
		$this->TEL_P_TECH = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELTECH($value) {
		$this->TEL_TECH = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAILTECH($value) {
		$this->MAIL_TECH = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRESPONSABLECOM($value) {
		$this->RESPONSABLE_COM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELPCOM($value) {
		$this->TEL_P_COM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAILCOM($value) {
		$this->MAIL_COM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELCOM($value) {
		$this->TEL_COM = $value;
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
	public function setIDADRESSEF($value) {
		$this->ID_ADRESSE_F = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFAXTECH($value) {
		$this->FAX_TECH = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFAXCOM($value) {
		$this->FAX_COM = $value;
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
	public function setSIRET($value) {
		$this->SIRET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setRIB($value) {
		$this->RIB = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMARCHEPUBLIC($value) {
		$this->MARCHE_PUBLIC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMARCHEPRIVE($value) {
		$this->MARCHE_PRIVE = $value;
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
	public function setMAXFACTURE($value) {
		$this->MAX_FACTURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPTANT($value) {
		$this->COMPTANT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPTECLIENTAUTO($value) {
		$this->COMPTE_CLIENT_AUTO = $value;
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
	public function setIDTARIF($value) {
		$this->ID_TARIF = $value;
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
	public function setIDLANGUE($value) {
		$this->ID_LANGUE = $value;
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
	public function setBLOQUELIVRAISON($value) {
		$this->BLOQUE_LIVRAISON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBLOQUE($value) {
		$this->BLOQUE = $value;
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
	public function setIDCOMPTEPCEPRODUIT($value) {
		$this->ID_COMPTE_PCE_PRODUIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setENCOURSMAX($value) {
		$this->ENCOURS_MAX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCATEGORIES($value) {
		$this->CATEGORIES = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOTEFINANCIERE($value) {
		$this->NOTE_FINANCIERE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCENTREGESTION($value) {
		$this->CENTRE_GESTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMETHODERELANCE($value) {
		$this->METHODE_RELANCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSITEINTERNET($value) {
		$this->SITE_INTERNET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setGROUPE($value) {
		$this->GROUPE = $value;
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
	public function setTIMBREFISCAL($value) {
		$this->TIMBRE_FISCAL = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}