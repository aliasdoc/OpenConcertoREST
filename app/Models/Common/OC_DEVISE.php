<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_DEVISE
 */
class OC_DEVISE extends Model
{
    protected $table = 'DEVISE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'CODE',
        'NOM',
        'LIBELLE',
        'LIBELLE_CENT',
        'TAUX',
        'ARCHIVE',
        'ORDRE',
        'TAUX_COMMERCIAL'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getLIBELLE() {
		return $this->LIBELLE;
	}

	/**
	 * @return mixed
	 */
	public function getLIBELLECENT() {
		return $this->LIBELLE_CENT;
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
	public function getTAUXCOMMERCIAL() {
		return $this->TAUX_COMMERCIAL;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
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
	public function setLIBELLE($value) {
		$this->LIBELLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLIBELLECENT($value) {
		$this->LIBELLE_CENT = $value;
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
	public function setTAUXCOMMERCIAL($value) {
		$this->TAUX_COMMERCIAL = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}