<?php

namespace App\Models\Modules\Project;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TYPEAFFAIRE
 */
class OC_TYPEAFFAIRE extends OC_BASE_MODEL
{
    protected $table = 'TYPE_AFFAIRE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
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