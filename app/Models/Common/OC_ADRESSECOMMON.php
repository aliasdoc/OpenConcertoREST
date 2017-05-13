<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_ADRESSECOMMON
 */
class OC_ADRESSECOMMON extends Model
{
    protected $table = 'ADRESSE_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'RUE',
        'CODE_POSTAL',
        'PAYS',
        'VILLE',
        'ARCHIVE',
        'ORDRE',
        'CEDEX',
        'HAS_CEDEX'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getRUE() {
		return $this->RUE;
	}

	/**
	 * @return mixed
	 */
	public function getCODEPOSTAL() {
		return $this->CODE_POSTAL;
	}

	/**
	 * @return mixed
	 */
	public function getPAYS() {
		return $this->PAYS;
	}

	/**
	 * @return mixed
	 */
	public function getVILLE() {
		return $this->VILLE;
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
	 * @return mixed
	 */
	public function getCEDEX() {
		return $this->CEDEX;
	}

	/**
	 * @return mixed
	 */
	public function getHASCEDEX() {
		return $this->HAS_CEDEX;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setRUE($value) {
		$this->RUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODEPOSTAL($value) {
		$this->CODE_POSTAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPAYS($value) {
		$this->PAYS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setVILLE($value) {
		$this->VILLE = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCEDEX($value) {
		$this->CEDEX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHASCEDEX($value) {
		$this->HAS_CEDEX = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}