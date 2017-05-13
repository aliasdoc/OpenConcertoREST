<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_COMPLETION
 */
class OC_COMPLETION extends Model
{
    protected $table = 'COMPLETION';

    public $timestamps = false;

    protected $fillable = [
        'CHAMP',
        'LABEL',
        'CHAMP',
        'LABEL',
        'CHAMP',
        'LABEL',
        'CHAMP',
        'LABEL',
        'CHAMP',
        'LABEL'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}

	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}

	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}

	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}

	/**
	 * @return mixed
	 */
	public function getCHAMP() {
		return $this->CHAMP;
	}

	/**
	 * @return mixed
	 */
	public function getLABEL() {
		return $this->LABEL;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCHAMP($value) {
		$this->CHAMP = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLABEL($value) {
		$this->LABEL = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}