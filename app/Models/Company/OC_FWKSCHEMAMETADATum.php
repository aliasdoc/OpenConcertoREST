<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FWKSCHEMAMETADATum
 */
class OC_FWKSCHEMAMETADATum extends OC_BASE_MODEL
{
    protected $table = 'FWK_SCHEMA_METADATA';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NAME',
        'VALUE'
    ];

    protected $guarded = [];

    
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