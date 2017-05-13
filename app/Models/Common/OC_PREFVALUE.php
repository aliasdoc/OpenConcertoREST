<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_PREFVALUE
 */
class OC_PREFVALUE extends Model
{
    protected $table = 'PREF_VALUE';

    public $timestamps = false;

    protected $fillable = [
        'ID_NODE',
        'NAME',
        'VALUE',
        'ID_NODE',
        'NAME',
        'VALUE',
        'ID_NODE',
        'NAME',
        'VALUE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDNODE() {
		return $this->ID_NODE;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}

	/**
	 * @return mixed
	 */
	public function getVALUE() {
		return $this->VALUE;
	}

	/**
	 * @return mixed
	 */
	public function getIDNODE() {
		return $this->ID_NODE;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}

	/**
	 * @return mixed
	 */
	public function getVALUE() {
		return $this->VALUE;
	}

	/**
	 * @return mixed
	 */
	public function getIDNODE() {
		return $this->ID_NODE;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}

	/**
	 * @return mixed
	 */
	public function getVALUE() {
		return $this->VALUE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDNODE($value) {
		$this->ID_NODE = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALUE($value) {
		$this->VALUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDNODE($value) {
		$this->ID_NODE = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALUE($value) {
		$this->VALUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDNODE($value) {
		$this->ID_NODE = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALUE($value) {
		$this->VALUE = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}