<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_USERRIGHT
 */
class OC_USERRIGHT extends Model
{
    protected $table = 'USER_RIGHT';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ORDRE',
        'ARCHIVE',
        'ID_USER_COMMON',
        'HAVE_RIGHT',
        'CODE',
        'NOM',
        'DESCRIPTION',
        'ID_RIGHT',
        'OBJECT'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getORDRE() {
		return $this->ORDRE;
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
	public function getIDUSERCOMMON() {
		return $this->ID_USER_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getHAVERIGHT() {
		return $this->HAVE_RIGHT;
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
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getDESCRIPTION() {
		return $this->DESCRIPTION;
	}

	/**
	 * @return mixed
	 */
	public function getIDRIGHT() {
		return $this->ID_RIGHT;
	}

	/**
	 * @return mixed
	 */
	public function getOBJECT() {
		return $this->OBJECT;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setORDRE($value) {
		$this->ORDRE = $value;
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
	public function setIDUSERCOMMON($value) {
		$this->ID_USER_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHAVERIGHT($value) {
		$this->HAVE_RIGHT = $value;
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
	public function setNOM($value) {
		$this->NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDESCRIPTION($value) {
		$this->DESCRIPTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDRIGHT($value) {
		$this->ID_RIGHT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setOBJECT($value) {
		$this->OBJECT = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}