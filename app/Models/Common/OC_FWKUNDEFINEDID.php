<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_FWKUNDEFINEDID
 */
class OC_FWKUNDEFINEDID extends Model
{
    protected $table = 'FWK_UNDEFINED_IDS';

    public $timestamps = false;

    protected $fillable = [
        'TABLENAME',
        'UNDEFINED_ID',
        'TABLENAME',
        'UNDEFINED_ID',
        'UNDEFINED_ID',
        'TABLENAME',
        'UNDEFINED_ID',
        'TABLENAME',
        'TABLENAME',
        'UNDEFINED_ID'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}

	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}

	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}

	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getTABLENAME() {
		return $this->TABLENAME;
	}

	/**
	 * @return mixed
	 */
	public function getUNDEFINEDID() {
		return $this->UNDEFINED_ID;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTABLENAME($value) {
		$this->TABLENAME = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setUNDEFINEDID($value) {
		$this->UNDEFINED_ID = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}