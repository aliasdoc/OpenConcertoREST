<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_FWKRIVMETADATum
 */
class OC_FWKRIVMETADATum extends Model
{
    protected $table = 'FWK_RIV_METADATA';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ELEMENT_CODE',
        'COMPONENT_CODE',
        'ITEM',
        'LABEL',
        'COLUMN_TITLE',
        'DOCUMENTATION'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getELEMENTCODE() {
		return $this->ELEMENT_CODE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPONENTCODE() {
		return $this->COMPONENT_CODE;
	}

	/**
	 * @return mixed
	 */
	public function getITEM() {
		return $this->ITEM;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}

	/**
	 * @return mixed
	 */
	public function getCOLUMNTITLE() {
		return $this->COLUMN_TITLE;
	}

	/**
	 * @return mixed
	 */
	public function getDOCUMENTATION() {
		return $this->DOCUMENTATION;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setELEMENTCODE($value) {
		$this->ELEMENT_CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPONENTCODE($value) {
		$this->COMPONENT_CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setITEM($value) {
		$this->ITEM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOLUMNTITLE($value) {
		$this->COLUMN_TITLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDOCUMENTATION($value) {
		$this->DOCUMENTATION = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}