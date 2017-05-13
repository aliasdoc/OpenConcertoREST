<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_MODEREGLEMENTPAYE
 */
class OC_MODEREGLEMENTPAYE extends OC_BASE_MODEL
{
    protected $table = 'MODE_REGLEMENT_PAYE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}