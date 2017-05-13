<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FWKMODULEMETADATum
 */
class OC_FWKMODULEMETADATum extends OC_BASE_MODEL
{
    protected $table = 'FWK_MODULE_METADATA';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'MODULE_NAME',
        'TABLE',
        'FIELD',
        'KEY',
        'MODULE_VERSION'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getMODULENAME() {
		return $this->MODULE_NAME;
	}

	/**
	 * @return mixed
	 */
	public function getTABLE() {
		return $this->TABLE;
	}

	/**
	 * @return mixed
	 */
	public function getFIELD() {
		return $this->FIELD;
	}

	/**
	 * @return mixed
	 */
	public function getKEY() {
		return $this->KEY;
	}

	/**
	 * @return mixed
	 */
	public function getMODULEVERSION() {
		return $this->MODULE_VERSION;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODULENAME($value) {
		$this->MODULE_NAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLE($value) {
		$this->TABLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFIELD($value) {
		$this->FIELD = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setKEY($value) {
		$this->KEY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODULEVERSION($value) {
		$this->MODULE_VERSION = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}