<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_COEFFPRIME
 */
class OC_COEFFPRIME extends OC_BASE_MODEL
{
    protected $table = 'COEFF_PRIME';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'PRIME_PERSO',
        'PRIME_RECONSTRUCTION',
        'PRIME_ANCIENNETE',
        'PRIME_DEROULEMENT',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getPRIMEPERSO() {
		return $this->PRIME_PERSO;
	}

	/**
	 * @return mixed
	 */
	public function getPRIMERECONSTRUCTION() {
		return $this->PRIME_RECONSTRUCTION;
	}

	/**
	 * @return mixed
	 */
	public function getPRIMEANCIENNETE() {
		return $this->PRIME_ANCIENNETE;
	}

	/**
	 * @return mixed
	 */
	public function getPRIMEDEROULEMENT() {
		return $this->PRIME_DEROULEMENT;
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
	public function setPRIMEPERSO($value) {
		$this->PRIME_PERSO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIMERECONSTRUCTION($value) {
		$this->PRIME_RECONSTRUCTION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIMEANCIENNETE($value) {
		$this->PRIME_ANCIENNETE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPRIMEDEROULEMENT($value) {
		$this->PRIME_DEROULEMENT = $value;
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