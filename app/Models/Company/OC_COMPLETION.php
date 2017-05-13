<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_COMPLETION
 */
class OC_COMPLETION extends OC_BASE_MODEL
{
    protected $table = 'COMPLETION';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CHAMP',
        'LABEL'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}