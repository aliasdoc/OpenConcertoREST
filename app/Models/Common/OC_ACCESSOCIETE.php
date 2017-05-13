<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_ACCESSOCIETE
 */
class OC_ACCESSOCIETE extends Model
{
    protected $table = 'ACCES_SOCIETE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_USER_COMMON',
        'ID_SOCIETE_COMMON',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMON() {
		return $this->ID_USER_COMMON;
	}

	/**
	 * @return mixed
	 */
	public function getIDSOCIETECOMMON() {
		return $this->ID_SOCIETE_COMMON;
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
	public function setIDUSERCOMMON($value) {
		$this->ID_USER_COMMON = $value;
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
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}