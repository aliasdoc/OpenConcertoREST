<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_VILLE
 */
class OC_VILLE extends OC_BASE_MODEL
{
    protected $table = 'VILLE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'CODE_POSTAL',
        'X_LAMBERT',
        'Y_LAMBERT',
        'POPULATION',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getCODEPOSTAL() {
		return $this->CODE_POSTAL;
	}

	/**
	 * @return mixed
	 */
	public function getXLAMBERT() {
		return $this->X_LAMBERT;
	}

	/**
	 * @return mixed
	 */
	public function getYLAMBERT() {
		return $this->Y_LAMBERT;
	}

	/**
	 * @return mixed
	 */
	public function getPOPULATION() {
		return $this->POPULATION;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEPOSTAL($value) {
		$this->CODE_POSTAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setXLAMBERT($value) {
		$this->X_LAMBERT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setYLAMBERT($value) {
		$this->Y_LAMBERT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOPULATION($value) {
		$this->POPULATION = $value;
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