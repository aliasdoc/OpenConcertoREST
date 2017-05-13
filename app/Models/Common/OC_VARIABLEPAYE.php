<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_VARIABLEPAYE
 */
class OC_VARIABLEPAYE extends Model
{
    protected $table = 'VARIABLE_PAYE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'VALEUR',
        'FORMULE',
        'NOM',
        'ARCHIVE',
        'ORDRE',
        'CATEGORIE',
        'INFOS'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getVALEUR() {
		return $this->VALEUR;
	}

	/**
	 * @return mixed
	 */
	public function getFORMULE() {
		return $this->FORMULE;
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
	public function getCATEGORIE() {
		return $this->CATEGORIE;
	}

	/**
	 * @return mixed
	 */
	public function getINFOS() {
		return $this->INFOS;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setVALEUR($value) {
		$this->VALEUR = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setFORMULE($value) {
		$this->FORMULE = $value;
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
	public function setCATEGORIE($value) {
		$this->CATEGORIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setINFOS($value) {
		$this->INFOS = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}