<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_FWKMODULEDEP
 */
class OC_FWKMODULEDEP extends OC_BASE_MODEL
{
    protected $table = 'FWK_MODULE_DEP';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_MODULE',
        'ID_MODULE_NEEDED'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDMODULE() {
		return $this->ID_MODULE;
	}

	/**
	 * @return mixed
	 */
	public function getIDMODULENEEDED() {
		return $this->ID_MODULE_NEEDED;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODULE($value) {
		$this->ID_MODULE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMODULENEEDED($value) {
		$this->ID_MODULE_NEEDED = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}