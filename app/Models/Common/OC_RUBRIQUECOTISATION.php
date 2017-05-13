<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_RUBRIQUECOTISATION
 */
class OC_RUBRIQUECOTISATION extends Model
{
    protected $table = 'RUBRIQUE_COTISATION';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CODE',
        'NOM',
        'ID_CAISSE_COTISATION',
        'BASE',
        'TX_SAL',
        'TX_PAT',
        'IMPOSABLE',
        'PART_CSG',
        'BRUT',
        'ID_PERIODE_VALIDITE',
        'ARCHIVE',
        'ORDRE',
        'ID_IMPRESSION_RUBRIQUE',
        'PART_CSG_SANS_ABATTEMENT',
        'PART_PAT_IMPOSABLE',
        'REDUCTION_FILLON',
        'ASSIETTE_PLAFONNEE',
        'ID_CODE_CAISSE_TYPE_RUBRIQUE',
        'ID_CODE_BASE_ASSUJETTIE'
    ];

    protected $guarded = [];

    
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
	public function getIDCAISSECOTISATION() {
		return $this->ID_CAISSE_COTISATION;
	}

	/**
	 * @return mixed
	 */
	public function getBASE() {
		return $this->BASE;
	}

	/**
	 * @return mixed
	 */
	public function getTXSAL() {
		return $this->TX_SAL;
	}

	/**
	 * @return mixed
	 */
	public function getTXPAT() {
		return $this->TX_PAT;
	}

	/**
	 * @return mixed
	 */
	public function getIMPOSABLE() {
		return $this->IMPOSABLE;
	}

	/**
	 * @return mixed
	 */
	public function getPARTCSG() {
		return $this->PART_CSG;
	}

	/**
	 * @return mixed
	 */
	public function getBRUT() {
		return $this->BRUT;
	}

	/**
	 * @return mixed
	 */
	public function getIDPERIODEVALIDITE() {
		return $this->ID_PERIODE_VALIDITE;
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
	public function getIDIMPRESSIONRUBRIQUE() {
		return $this->ID_IMPRESSION_RUBRIQUE;
	}

	/**
	 * @return mixed
	 */
	public function getPARTCSGSANSABATTEMENT() {
		return $this->PART_CSG_SANS_ABATTEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getPARTPATIMPOSABLE() {
		return $this->PART_PAT_IMPOSABLE;
	}

	/**
	 * @return mixed
	 */
	public function getREDUCTIONFILLON() {
		return $this->REDUCTION_FILLON;
	}

	/**
	 * @return mixed
	 */
	public function getASSIETTEPLAFONNEE() {
		return $this->ASSIETTE_PLAFONNEE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODECAISSETYPERUBRIQUE() {
		return $this->ID_CODE_CAISSE_TYPE_RUBRIQUE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODEBASEASSUJETTIE() {
		return $this->ID_CODE_BASE_ASSUJETTIE;
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
	public function setIDCAISSECOTISATION($value) {
		$this->ID_CAISSE_COTISATION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBASE($value) {
		$this->BASE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTXSAL($value) {
		$this->TX_SAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTXPAT($value) {
		$this->TX_PAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIMPOSABLE($value) {
		$this->IMPOSABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPARTCSG($value) {
		$this->PART_CSG = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setBRUT($value) {
		$this->BRUT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPERIODEVALIDITE($value) {
		$this->ID_PERIODE_VALIDITE = $value;
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
	public function setIDIMPRESSIONRUBRIQUE($value) {
		$this->ID_IMPRESSION_RUBRIQUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPARTCSGSANSABATTEMENT($value) {
		$this->PART_CSG_SANS_ABATTEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPARTPATIMPOSABLE($value) {
		$this->PART_PAT_IMPOSABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setREDUCTIONFILLON($value) {
		$this->REDUCTION_FILLON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setASSIETTEPLAFONNEE($value) {
		$this->ASSIETTE_PLAFONNEE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODECAISSETYPERUBRIQUE($value) {
		$this->ID_CODE_CAISSE_TYPE_RUBRIQUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODEBASEASSUJETTIE($value) {
		$this->ID_CODE_BASE_ASSUJETTIE = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}