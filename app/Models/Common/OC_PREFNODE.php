<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_PREFNODE
 */
class OC_PREFNODE extends Model
{
    protected $table = 'PREF_NODE';

    public $timestamps = false;

    protected $fillable = [
        'ID',
        'ID_PARENT',
        'NAME',
        'ID',
        'ID_PARENT',
        'NAME',
        'ID',
        'ID_PARENT',
        'NAME'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getID() {
		return $this->ID;
	}

	/**
	 * @return mixed
	 */
	public function getIDPARENT() {
		return $this->ID_PARENT;
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
	public function getID() {
		return $this->ID;
	}

	/**
	 * @return mixed
	 */
	public function getIDPARENT() {
		return $this->ID_PARENT;
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
	public function getID() {
		return $this->ID;
	}

	/**
	 * @return mixed
	 */
	public function getIDPARENT() {
		return $this->ID_PARENT;
	}

	/**
	 * @return mixed
	 */
	public function getNAME() {
		return $this->NAME;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setID($value) {
		$this->ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPARENT($value) {
		$this->ID_PARENT = $value;
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
	public function setID($value) {
		$this->ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPARENT($value) {
		$this->ID_PARENT = $value;
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
	public function setID($value) {
		$this->ID = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDPARENT($value) {
		$this->ID_PARENT = $value;
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


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}