<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_CUMULSPAYE
 */
class OC_CUMULSPAYE extends OC_BASE_MODEL
{
    protected $table = 'CUMULS_PAYE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'SAL_BRUT_C',
        'COT_PAT_C',
        'COT_SAL_C',
        'NET_IMP_C',
        'NET_A_PAYER_C',
        'CSG_C',
        'ARCHIVE',
        'ORDRE',
        'ID_USER_COMMON_MODIFY',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'HEURE_TRAV'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getSALBRUTC() {
		return $this->SAL_BRUT_C;
	}

	/**
	 * @return mixed
	 */
	public function getCOTPATC() {
		return $this->COT_PAT_C;
	}

	/**
	 * @return mixed
	 */
	public function getCOTSALC() {
		return $this->COT_SAL_C;
	}

	/**
	 * @return mixed
	 */
	public function getNETIMPC() {
		return $this->NET_IMP_C;
	}

	/**
	 * @return mixed
	 */
	public function getNETAPAYERC() {
		return $this->NET_A_PAYER_C;
	}

	/**
	 * @return mixed
	 */
	public function getCSGC() {
		return $this->CSG_C;
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
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
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
	 * @return mixed
	 */
	public function getHEURETRAV() {
		return $this->HEURE_TRAV;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setSALBRUTC($value) {
		$this->SAL_BRUT_C = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOTPATC($value) {
		$this->COT_PAT_C = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOTSALC($value) {
		$this->COT_SAL_C = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNETIMPC($value) {
		$this->NET_IMP_C = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNETAPAYERC($value) {
		$this->NET_A_PAYER_C = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCSGC($value) {
		$this->CSG_C = $value;
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
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
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

	/**
	 * @param $value
	 * @return $this
	 */
	public function setHEURETRAV($value) {
		$this->HEURE_TRAV = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}