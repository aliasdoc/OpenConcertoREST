<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_FWKSCHEMAMETADATum
 */
class OC_FWKSCHEMAMETADATum extends Model
{
    protected $table = 'FWK_SCHEMA_METADATA';

    public $timestamps = false;

    protected $fillable = [
        'NAME',
        'VALUE',
        'NAME',
        'VALUE',
        'VALUE',
        'NAME',
        'NAME',
        'VALUE',
        'NAME',
        'VALUE',
        'NAME',
        'VALUE'
    ];

    protected $guarded = [];

    
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
	public function getVALUE() {
		return $this->VALUE;
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
	public function setVALUE($value) {
		$this->VALUE = $value;
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