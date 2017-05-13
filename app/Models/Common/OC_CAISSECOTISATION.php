<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_CAISSECOTISATION
 */
class OC_CAISSECOTISATION extends Model
{
    protected $table = 'CAISSE_COTISATION';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'ID_ADRESSE_COMMON',
        'TEL',
        'MAIL',
        'TEL_PORTABLE',
        'ARCHIVE',
        'ORDRE',
        'NUMERO_COMPTE_PCE',
        'NUMERO_COMPTE_PCE_CHARGES'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getIDADRESSECOMMON() {
		return $this->ID_ADRESSE_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getTEL() {
		return $this->TEL;
	}

	/**
	 * @return mixed
	 */
	public function getMAIL() {
		return $this->MAIL;
	}

	/**
	 * @return mixed
	 */
	public function getTELPORTABLE() {
		return $this->TEL_PORTABLE;
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
	public function getNUMEROCOMPTEPCE() {
		return $this->NUMERO_COMPTE_PCE;
	}

	/**
	 * @return mixed
	 */
	public function getNUMEROCOMPTEPCECHARGES() {
		return $this->NUMERO_COMPTE_PCE_CHARGES;
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
	public function setIDADRESSECOMMON($value) {
		$this->ID_ADRESSE_COMMON = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTEL($value) {
		$this->TEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMAIL($value) {
		$this->MAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTELPORTABLE($value) {
		$this->TEL_PORTABLE = $value;
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
	public function setNUMEROCOMPTEPCE($value) {
		$this->NUMERO_COMPTE_PCE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMEROCOMPTEPCECHARGES($value) {
		$this->NUMERO_COMPTE_PCE_CHARGES = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}