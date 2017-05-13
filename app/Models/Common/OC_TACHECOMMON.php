<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_TACHECOMMON
 */
class OC_TACHECOMMON extends Model
{
    protected $table = 'TACHE_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'PRIORITE',
        'FAIT',
        'NOM',
        'DATE_ENTREE',
        'DATE_FAIT',
        'DATE_EXP',
        'ID_USER_COMMON_CREATE',
        'ID_USER_COMMON_TO',
        'ORDRE',
        'ARCHIVE',
        'COMMENT',
        'ID_USER_COMMON_ASSIGN_BY',
        'ID_SOCIETE_COMMON',
        'TYPE',
        'COOKIE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getPRIORITE() {
		return $this->PRIORITE;
	}

	/**
	 * @return mixed
	 */
	public function getFAIT() {
		return $this->FAIT;
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
	public function getDATEENTREE() {
		return $this->DATE_ENTREE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFAIT() {
		return $this->DATE_FAIT;
	}

	/**
	 * @return mixed
	 */
	public function getDATEEXP() {
		return $this->DATE_EXP;
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
	public function getIDUSERCOMMONTO() {
		return $this->ID_USER_COMMON_TO;
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
	public function getCOMMENT() {
		return $this->COMMENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONASSIGNBY() {
		return $this->ID_USER_COMMON_ASSIGN_BY;
	}

	/**
	 * @return mixed
	 */
	public function getIDSOCIETECOMMON() {
		return $this->ID_SOCIETE_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getTYPE() {
		return $this->TYPE;
	}

	/**
	 * @return mixed
	 */
	public function getCOOKIE() {
		return $this->COOKIE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIORITE($value) {
		$this->PRIORITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFAIT($value) {
		$this->FAIT = $value;
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
	public function setDATEENTREE($value) {
		$this->DATE_ENTREE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFAIT($value) {
		$this->DATE_FAIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEEXP($value) {
		$this->DATE_EXP = $value;
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
	public function setIDUSERCOMMONTO($value) {
		$this->ID_USER_COMMON_TO = $value;
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
	public function setCOMMENT($value) {
		$this->COMMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONASSIGNBY($value) {
		$this->ID_USER_COMMON_ASSIGN_BY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSOCIETECOMMON($value) {
		$this->ID_SOCIETE_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTYPE($value) {
		$this->TYPE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOOKIE($value) {
		$this->COOKIE = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}