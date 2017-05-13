<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_TACHELISTENERCOMMON
 */
class OC_TACHELISTENERCOMMON extends Model
{
    protected $table = 'TACHE_LISTENER_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_USER_COMMON',
        'ID_USER_COMMON_LISTENTO',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMON() {
		return $this->ID_USER_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONLISTENTO() {
		return $this->ID_USER_COMMON_LISTENTO;
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
	public function setIDUSERCOMMON($value) {
		$this->ID_USER_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONLISTENTO($value) {
		$this->ID_USER_COMMON_LISTENTO = $value;
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
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}