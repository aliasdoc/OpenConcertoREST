<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CONTRATSALARIE
 */
class OC_CONTRATSALARIE extends OC_BASE_MODEL
{
    protected $table = 'CONTRAT_SALARIE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NATURE',
        'ID_CODE_EMPLOI',
        'ID_CODE_CONTRAT_TRAVAIL',
        'ID_CODE_DROIT_CONTRAT',
        'ID_CODE_CARACT_ACTIVITE',
        'ID_CODE_STATUT_PROF',
        'ID_CODE_STATUT_CATEGORIEL',
        'ARCHIVE',
        'ORDRE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'CODE_IRC_UGRR',
        'NUMERO_RATTACHEMENT_UGRR',
        'CODE_IRC_UGRC',
        'NUMERO_RATTACHEMENT_UGRC',
        'CODE_IRC_RETRAITE',
        'NUMERO_RATTACHEMENT_RETRAITE',
        'ID_CODE_STATUT_CAT_CONV',
        'NUMERO',
        'CODE_REGIME_RETRAITE_DSN',
        'DATE_PREV_FIN',
        'ID_CONTRAT_MODALITE_TEMPS',
        'ID_CONTRAT_REGIME_MALADIE',
        'ID_CONTRAT_REGIME_VIEILLESSE',
        'ID_CONTRAT_MOTIF_RECOURS',
        'ID_CONTRAT_DETACHE_EXPATRIE',
        'ID_CONTRAT_DISPOSITIF_POLITIQUE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNATURE() {
		return $this->NATURE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEEMPLOI() {
		return $this->ID_CODE_EMPLOI;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODECONTRATTRAVAIL() {
		return $this->ID_CODE_CONTRAT_TRAVAIL;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEDROITCONTRAT() {
		return $this->ID_CODE_DROIT_CONTRAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODECARACTACTIVITE() {
		return $this->ID_CODE_CARACT_ACTIVITE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODESTATUTPROF() {
		return $this->ID_CODE_STATUT_PROF;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODESTATUTCATEGORIEL() {
		return $this->ID_CODE_STATUT_CATEGORIEL;
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
	public function getCODEIRCUGRR() {
		return $this->CODE_IRC_UGRR;
	}

	/**
	 * @return mixed
	 */
	public function getNUMERORATTACHEMENTUGRR() {
		return $this->NUMERO_RATTACHEMENT_UGRR;
	}

	/**
	 * @return mixed
	 */
	public function getCODEIRCUGRC() {
		return $this->CODE_IRC_UGRC;
	}

	/**
	 * @return mixed
	 */
	public function getNUMERORATTACHEMENTUGRC() {
		return $this->NUMERO_RATTACHEMENT_UGRC;
	}

	/**
	 * @return mixed
	 */
	public function getCODEIRCRETRAITE() {
		return $this->CODE_IRC_RETRAITE;
	}

	/**
	 * @return mixed
	 */
	public function getNUMERORATTACHEMENTRETRAITE() {
		return $this->NUMERO_RATTACHEMENT_RETRAITE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODESTATUTCATCONV() {
		return $this->ID_CODE_STATUT_CAT_CONV;
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
	public function getCODEREGIMERETRAITEDSN() {
		return $this->CODE_REGIME_RETRAITE_DSN;
	}

	/**
	 * @return mixed
	 */
	public function getDATEPREVFIN() {
		return $this->DATE_PREV_FIN;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATMODALITETEMPS() {
		return $this->ID_CONTRAT_MODALITE_TEMPS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATREGIMEMALADIE() {
		return $this->ID_CONTRAT_REGIME_MALADIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATREGIMEVIEILLESSE() {
		return $this->ID_CONTRAT_REGIME_VIEILLESSE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATMOTIFRECOURS() {
		return $this->ID_CONTRAT_MOTIF_RECOURS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATDETACHEEXPATRIE() {
		return $this->ID_CONTRAT_DETACHE_EXPATRIE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCONTRATDISPOSITIFPOLITIQUE() {
		return $this->ID_CONTRAT_DISPOSITIF_POLITIQUE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setNATURE($value) {
		$this->NATURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEEMPLOI($value) {
		$this->ID_CODE_EMPLOI = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODECONTRATTRAVAIL($value) {
		$this->ID_CODE_CONTRAT_TRAVAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEDROITCONTRAT($value) {
		$this->ID_CODE_DROIT_CONTRAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODECARACTACTIVITE($value) {
		$this->ID_CODE_CARACT_ACTIVITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODESTATUTPROF($value) {
		$this->ID_CODE_STATUT_PROF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODESTATUTCATEGORIEL($value) {
		$this->ID_CODE_STATUT_CATEGORIEL = $value;
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
	public function setCODEIRCUGRR($value) {
		$this->CODE_IRC_UGRR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMERORATTACHEMENTUGRR($value) {
		$this->NUMERO_RATTACHEMENT_UGRR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEIRCUGRC($value) {
		$this->CODE_IRC_UGRC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMERORATTACHEMENTUGRC($value) {
		$this->NUMERO_RATTACHEMENT_UGRC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEIRCRETRAITE($value) {
		$this->CODE_IRC_RETRAITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMERORATTACHEMENTRETRAITE($value) {
		$this->NUMERO_RATTACHEMENT_RETRAITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODESTATUTCATCONV($value) {
		$this->ID_CODE_STATUT_CAT_CONV = $value;
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
	public function setCODEREGIMERETRAITEDSN($value) {
		$this->CODE_REGIME_RETRAITE_DSN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEPREVFIN($value) {
		$this->DATE_PREV_FIN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATMODALITETEMPS($value) {
		$this->ID_CONTRAT_MODALITE_TEMPS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATREGIMEMALADIE($value) {
		$this->ID_CONTRAT_REGIME_MALADIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATREGIMEVIEILLESSE($value) {
		$this->ID_CONTRAT_REGIME_VIEILLESSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATMOTIFRECOURS($value) {
		$this->ID_CONTRAT_MOTIF_RECOURS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATDETACHEEXPATRIE($value) {
		$this->ID_CONTRAT_DETACHE_EXPATRIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCONTRATDISPOSITIFPOLITIQUE($value) {
		$this->ID_CONTRAT_DISPOSITIF_POLITIQUE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}