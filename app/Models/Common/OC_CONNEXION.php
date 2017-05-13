<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_CONNEXION
 */
class OC_CONNEXION extends Model
{
    protected $table = 'CONNEXION';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'LOGIN',
        'MDP',
        'DATE',
        'IP',
        'ARCHIVE',
        'ORDRE',
        'FAILED'
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
	public function getMDP() {
		return $this->MDP;
	}

	/**
	 * @return mixed
	 */
	public function getDATE() {
		return $this->DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIP() {
		return $this->IP;
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
	public function getFAILED() {
		return $this->FAILED;
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
	public function setMDP($value) {
		$this->MDP = $value;
		return $this;
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
	public function setIP($value) {
		$this->IP = $value;
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
	public function setFAILED($value) {
		$this->FAILED = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}