<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CLASSEMENTCONVENTIONNEL
 */
class OC_CLASSEMENTCONVENTIONNEL extends OC_BASE_MODEL
{
    protected $table = 'CLASSEMENT_CONVENTIONNEL';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NIVEAU',
        'COEFF',
        'INDICE',
        'POSITION',
        'ECHELON',
        'ARCHIVE',
        'ORDRE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNIVEAU() {
		return $this->NIVEAU;
	}

	/**
	 * @return mixed
	 */
	public function getCOEFF() {
		return $this->COEFF;
	}

	/**
	 * @return mixed
	 */
	public function getINDICE() {
		return $this->INDICE;
	}

	/**
	 * @return mixed
	 */
	public function getPOSITION() {
		return $this->POSITION;
	}

	/**
	 * @return mixed
	 */
	public function getECHELON() {
		return $this->ECHELON;
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
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
	}

	/**
	 * @return mixed
	 */
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setNIVEAU($value) {
		$this->NIVEAU = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOEFF($value) {
		$this->COEFF = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINDICE($value) {
		$this->INDICE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPOSITION($value) {
		$this->POSITION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setECHELON($value) {
		$this->ECHELON = $value;
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
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONCREATE($value) {
		$this->ID_USER_COMMON_CREATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}