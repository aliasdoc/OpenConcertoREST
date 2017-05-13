<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_RUBRIQUEBRUT
 */
class OC_RUBRIQUEBRUT extends Model
{
    protected $table = 'RUBRIQUE_BRUT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CODE',
        'NOM',
        'BASE',
        'TAUX',
        'MONTANT',
        'ID_PERIODE_VALIDITE',
        'ARCHIVE',
        'ORDRE',
        'ID_TYPE_RUBRIQUE_BRUT',
        'IMPOSABLE',
        'PART_BRUT',
        'PART_CP',
        'ID_IMPRESSION_RUBRIQUE',
        'ID_CODE_CAISSE_TYPE_RUBRIQUE',
        'ID_CODE_TYPE_RUBRIQUE_BRUT'
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
	public function getIDTYPERUBRIQUEBRUT() {
		return $this->ID_TYPE_RUBRIQUE_BRUT;
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
	public function getPARTBRUT() {
		return $this->PART_BRUT;
	}

	/**
	 * @return mixed
	 */
	public function getPARTCP() {
		return $this->PART_CP;
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
	public function getIDCODECAISSETYPERUBRIQUE() {
		return $this->ID_CODE_CAISSE_TYPE_RUBRIQUE;
	}

	/**
	 * @return mixed
	 */
	public function getIDCODETYPERUBRIQUEBRUT() {
		return $this->ID_CODE_TYPE_RUBRIQUE_BRUT;
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
	public function setIDTYPERUBRIQUEBRUT($value) {
		$this->ID_TYPE_RUBRIQUE_BRUT = $value;
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
	public function setPARTBRUT($value) {
		$this->PART_BRUT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPARTCP($value) {
		$this->PART_CP = $value;
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
	public function setIDCODECAISSETYPERUBRIQUE($value) {
		$this->ID_CODE_CAISSE_TYPE_RUBRIQUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCODETYPERUBRIQUEBRUT($value) {
		$this->ID_CODE_TYPE_RUBRIQUE_BRUT = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}