<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_DEVISEHISTORIQUE
 */
class OC_DEVISEHISTORIQUE extends OC_BASE_MODEL
{
    protected $table = 'DEVISE_HISTORIQUE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'DATE',
        'SRC',
        'DST',
        'TAUX',
        'TAUX_COMMERCIAL',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getDATE() {
		return $this->DATE;
	}

	/**
	 * @return mixed
	 */
	public function getSRC() {
		return $this->SRC;
	}

	/**
	 * @return mixed
	 */
	public function getDST() {
		return $this->DST;
	}

	/**
	 * @return mixed
	 */
	public function getTAUX() {
		return $this->TAUX;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXCOMMERCIAL() {
		return $this->TAUX_COMMERCIAL;
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
	public function setDATE($value) {
		$this->DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSRC($value) {
		$this->SRC = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDST($value) {
		$this->DST = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUX($value) {
		$this->TAUX = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXCOMMERCIAL($value) {
		$this->TAUX_COMMERCIAL = $value;
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