<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_INDICE
 */
class OC_INDICE extends Model
{
    protected $table = 'INDICE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ANNEE',
        'ORDRE',
        'ARCHIVE',
        'JANVIER',
        'FEVRIER',
        'MARS',
        'AVRIL',
        'MAI',
        'JUIN',
        'JUILLET',
        'AOUT',
        'SEPTEMBRE',
        'OCTOBRE',
        'NOVEMBRE',
        'DECEMBRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getANNEE() {
		return $this->ANNEE;
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
	public function getJANVIER() {
		return $this->JANVIER;
	}

	/**
	 * @return mixed
	 */
	public function getFEVRIER() {
		return $this->FEVRIER;
	}

	/**
	 * @return mixed
	 */
	public function getMARS() {
		return $this->MARS;
	}

	/**
	 * @return mixed
	 */
	public function getAVRIL() {
		return $this->AVRIL;
	}

	/**
	 * @return mixed
	 */
	public function getMAI() {
		return $this->MAI;
	}

	/**
	 * @return mixed
	 */
	public function getJUIN() {
		return $this->JUIN;
	}

	/**
	 * @return mixed
	 */
	public function getJUILLET() {
		return $this->JUILLET;
	}

	/**
	 * @return mixed
	 */
	public function getAOUT() {
		return $this->AOUT;
	}

	/**
	 * @return mixed
	 */
	public function getSEPTEMBRE() {
		return $this->SEPTEMBRE;
	}

	/**
	 * @return mixed
	 */
	public function getOCTOBRE() {
		return $this->OCTOBRE;
	}

	/**
	 * @return mixed
	 */
	public function getNOVEMBRE() {
		return $this->NOVEMBRE;
	}

	/**
	 * @return mixed
	 */
	public function getDECEMBRE() {
		return $this->DECEMBRE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setANNEE($value) {
		$this->ANNEE = $value;
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
	public function setJANVIER($value) {
		$this->JANVIER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFEVRIER($value) {
		$this->FEVRIER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMARS($value) {
		$this->MARS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAVRIL($value) {
		$this->AVRIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAI($value) {
		$this->MAI = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setJUIN($value) {
		$this->JUIN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setJUILLET($value) {
		$this->JUILLET = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setAOUT($value) {
		$this->AOUT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSEPTEMBRE($value) {
		$this->SEPTEMBRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setOCTOBRE($value) {
		$this->OCTOBRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOVEMBRE($value) {
		$this->NOVEMBRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDECEMBRE($value) {
		$this->DECEMBRE = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}