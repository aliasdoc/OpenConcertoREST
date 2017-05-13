<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_TACHERIGHT
 */
class OC_TACHERIGHT extends Model
{
    protected $table = 'TACHE_RIGHTS';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_USER_COMMON',
        'ID_USER_COMMON_TO',
        'READ',
        'MODIFY',
        'ADD',
        'VALIDATE',
        'ARCHIVE'
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
	public function getIDUSERCOMMONTO() {
		return $this->ID_USER_COMMON_TO;
	}

	/**
	 * @return mixed
	 */
	public function getREAD() {
		return $this->READ;
	}

	/**
	 * @return mixed
	 */
	public function getMODIFY() {
		return $this->MODIFY;
	}

	/**
	 * @return mixed
	 */
	public function getADD() {
		return $this->ADD;
	}

	/**
	 * @return mixed
	 */
	public function getVALIDATE() {
		return $this->VALIDATE;
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
	public function setIDUSERCOMMON($value) {
		$this->ID_USER_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONTO($value) {
		$this->ID_USER_COMMON_TO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setREAD($value) {
		$this->READ = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODIFY($value) {
		$this->MODIFY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setADD($value) {
		$this->ADD = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALIDATE($value) {
		$this->VALIDATE = $value;
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
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}