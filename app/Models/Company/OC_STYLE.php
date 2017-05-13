<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_STYLE
 */
class OC_STYLE extends OC_BASE_MODEL
{
    protected $table = 'STYLE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_STYLE',
        'NOM',
        'CODE',
        'ARCHIVE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDSTYLE() {
		return $this->ID_STYLE;
	}

	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getARCHIVE() {
		return $this->ARCHIVE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSTYLE($value) {
		$this->ID_STYLE = $value;
		return $this;
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
	public function setCODE($value) {
		$this->CODE = $value;
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


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}