<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CALENDARITEM
 */
class OC_CALENDARITEM extends OC_BASE_MODEL
{
    protected $table = 'CALENDAR_ITEM';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'START',
        'END',
        'DURATION_S',
        'SUMMARY',
        'DESCRIPTION',
        'FLAGS',
        'STATUS',
        'ID_CALENDAR_ITEM_GROUP',
        'SOURCE_ID',
        'SOURCE_TABLE',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getSTART() {
		return $this->START;
	}

	/**
	 * @return mixed
	 */
	public function getEND() {
		return $this->END;
	}

	/**
	 * @return mixed
	 */
	public function getDURATIONS() {
		return $this->DURATION_S;
	}

	/**
	 * @return mixed
	 */
	public function getSUMMARY() {
		return $this->SUMMARY;
	}

	/**
	 * @return mixed
	 */
	public function getDESCRIPTION() {
		return $this->DESCRIPTION;
	}

	/**
	 * @return mixed
	 */
	public function getFLAGS() {
		return $this->FLAGS;
	}

	/**
	 * @return mixed
	 */
	public function getSTATUS() {
		return $this->STATUS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCALENDARITEMGROUP() {
		return $this->ID_CALENDAR_ITEM_GROUP;
	}

	/**
	 * @return mixed
	 */
	public function getSOURCEID() {
		return $this->SOURCE_ID;
	}

	/**
	 * @return mixed
	 */
	public function getSOURCETABLE() {
		return $this->SOURCE_TABLE;
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
	 * @param $value
	 * @return $this
	 */
	public function setSTART($value) {
		$this->START = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setEND($value) {
		$this->END = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDURATIONS($value) {
		$this->DURATION_S = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSUMMARY($value) {
		$this->SUMMARY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDESCRIPTION($value) {
		$this->DESCRIPTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFLAGS($value) {
		$this->FLAGS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSTATUS($value) {
		$this->STATUS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCALENDARITEMGROUP($value) {
		$this->ID_CALENDAR_ITEM_GROUP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOURCEID($value) {
		$this->SOURCE_ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSOURCETABLE($value) {
		$this->SOURCE_TABLE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}