<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FWKUNDEFINEDID
 */
class OC_FWKUNDEFINEDID extends OC_BASE_MODEL
{
    protected $table = 'FWK_UNDEFINED_IDS';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'TABLENAME',
        'UNDEFINED_ID'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}