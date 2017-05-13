<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_EXERCICECOMMON
 */
class OC_EXERCICECOMMON extends Model
{
    protected $table = 'EXERCICE_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'DATE_DEB',
        'DATE_FIN',
        'NUMERO',
        'CLOTURE',
        'ARCHIVE',
        'ORDRE',
        'DATE_CLOTURE',
        'ID_SOCIETE_COMMON'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getDATEDEB() {
		return $this->DATE_DEB;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFIN() {
		return $this->DATE_FIN;
	}

	/**
	 * @return mixed
	 */
	public function getNUMERO() {
		return $this->NUMERO;
	}

	/**
	 * @return mixed
	 */
	public function getCLOTURE() {
		return $this->CLOTURE;
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
	public function getDATECLOTURE() {
		return $this->DATE_CLOTURE;
	}

	/**
	 * @return mixed
	 */
	public function getIDSOCIETECOMMON() {
		return $this->ID_SOCIETE_COMMON;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEDEB($value) {
		$this->DATE_DEB = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFIN($value) {
		$this->DATE_FIN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNUMERO($value) {
		$this->NUMERO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCLOTURE($value) {
		$this->CLOTURE = $value;
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
	public function setDATECLOTURE($value) {
		$this->DATE_CLOTURE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSOCIETECOMMON($value) {
		$this->ID_SOCIETE_COMMON = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}