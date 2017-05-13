<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_PREFVALUE
 */
class OC_PREFVALUE extends OC_BASE_MODEL
{
    protected $table = 'PREF_VALUE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_NODE',
        'NAME',
        'VALUE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDNODE() {
		return $this->ID_NODE;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}

	/**
	 * @return mixed
	 */
	public function getVALUE() {
		return $this->VALUE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDNODE($value) {
		$this->ID_NODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNAME($value) {
		$this->NAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALUE($value) {
		$this->VALUE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}