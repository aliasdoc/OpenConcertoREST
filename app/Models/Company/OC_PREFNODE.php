<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_PREFNODE
 */
class OC_PREFNODE extends OC_BASE_MODEL
{
    protected $table = 'PREF_NODE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_PARENT',
        'NAME'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDPARENT() {
		return $this->ID_PARENT;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPARENT($value) {
		$this->ID_PARENT = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}