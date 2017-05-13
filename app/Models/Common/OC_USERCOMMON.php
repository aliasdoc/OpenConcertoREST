<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_USERCOMMON
 */
class OC_USERCOMMON extends Model
{
    protected $table = 'USER_COMMON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'LOGIN',
        'PASSWORD',
        'NOM',
        'PRENOM',
        'SURNOM',
        'ORDRE',
        'ARCHIVE',
        'SUPERUSER',
        'ADMIN',
        'MAIL',
        'DISABLED',
        'TEL'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getLOGIN() {
		return $this->LOGIN;
	}

	/**
	 * @return mixed
	 */
	public function getPASSWORD() {
		return $this->PASSWORD;
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
	public function getPRENOM() {
		return $this->PRENOM;
	}

	/**
	 * @return mixed
	 */
	public function getSURNOM() {
		return $this->SURNOM;
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
	public function getARCHIVE() {
		return $this->ARCHIVE;
	}

	/**
	 * @return mixed
	 */
	public function getSUPERUSER() {
		return $this->SUPERUSER;
	}

	/**
	 * @return mixed
	 */
	public function getADMIN() {
		return $this->ADMIN;
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
	public function getDISABLED() {
		return $this->DISABLED;
	}

	/**
	 * @return mixed
	 */
	public function getTEL() {
		return $this->TEL;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setLOGIN($value) {
		$this->LOGIN = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setPASSWORD($value) {
		$this->PASSWORD = $value;
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
	public function setPRENOM($value) {
		$this->PRENOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSURNOM($value) {
		$this->SURNOM = $value;
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
	public function setARCHIVE($value) {
		$this->ARCHIVE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSUPERUSER($value) {
		$this->SUPERUSER = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setADMIN($value) {
		$this->ADMIN = $value;
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
	public function setDISABLED($value) {
		$this->DISABLED = $value;
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


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}