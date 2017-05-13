<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TICKETCAISSE
 */
class OC_TICKETCAISSE extends OC_BASE_MODEL
{
    protected $table = 'TICKET_CAISSE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ARCHIVE',
        'ORDRE',
        'ID_CLIENT',
        'NOM',
        'DATE',
        'ID_COMMERCIAL',
        'NUMERO',
        'TOTAL_TTC',
        'TOTAL_TVA',
        'TOTAL_HT',
        'ID_CAISSE',
        'ID_MOUVEMENT'
    ];

    protected $guarded = [];

    
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
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
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
	public function getDATE() {
		return $this->DATE;
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
	public function getNUMERO() {
		return $this->NUMERO;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALTTC() {
		return $this->TOTAL_TTC;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALTVA() {
		return $this->TOTAL_TVA;
	}

	/**
	 * @return mixed
	 */
	public function getTOTALHT() {
		return $this->TOTAL_HT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCAISSE() {
		return $this->ID_CAISSE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOUVEMENT() {
		return $this->ID_MOUVEMENT;
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
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
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
	public function setDATE($value) {
		$this->DATE = $value;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALTTC($value) {
		$this->TOTAL_TTC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALTVA($value) {
		$this->TOTAL_TVA = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTOTALHT($value) {
		$this->TOTAL_HT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCAISSE($value) {
		$this->ID_CAISSE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOUVEMENT($value) {
		$this->ID_MOUVEMENT = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}