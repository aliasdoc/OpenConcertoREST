<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_RUBRIQUENET
 */
class OC_RUBRIQUENET extends Model
{
    protected $table = 'RUBRIQUE_NET';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CODE',
        'NOM',
        'BASE',
        'TAUX',
        'MONTANT',
        'IMPOSABLE',
        'FRAIS_PERS',
        'BRUT',
        'ID_PERIODE_VALIDITE',
        'ID_TYPE_RUBRIQUE_NET',
        'ID_IMPRESSION_RUBRIQUE',
        'ORDRE',
        'ARCHIVE',
        'NUMERO_COMPTE_PCE_CHARGES',
        'ID_CODE_CAISSE_TYPE_RUBRIQUE'
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
	public function getBASE() {
		return $this->BASE;
	}

	/**
	 * @return mixed
	 */
	public function getTAUX() {
		return $this->TAUX;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANT() {
		return $this->MONTANT;
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
	public function getFRAISPERS() {
		return $this->FRAIS_PERS;
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
	public function getIDTYPERUBRIQUENET() {
		return $this->ID_TYPE_RUBRIQUE_NET;
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
	public function getNUMEROCOMPTEPCECHARGES() {
		return $this->NUMERO_COMPTE_PCE_CHARGES;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODECAISSETYPERUBRIQUE() {
		return $this->ID_CODE_CAISSE_TYPE_RUBRIQUE;
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
	public function setBASE($value) {
		$this->BASE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUX($value) {
		$this->TAUX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANT($value) {
		$this->MONTANT = $value;
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
	public function setFRAISPERS($value) {
		$this->FRAIS_PERS = $value;
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
	public function setIDTYPERUBRIQUENET($value) {
		$this->ID_TYPE_RUBRIQUE_NET = $value;
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
	public function setNUMEROCOMPTEPCECHARGES($value) {
		$this->NUMERO_COMPTE_PCE_CHARGES = $value;
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


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}