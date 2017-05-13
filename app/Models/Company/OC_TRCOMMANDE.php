<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TRCOMMANDE
 */
class OC_TRCOMMANDE extends OC_BASE_MODEL
{
    protected $table = 'TR_COMMANDE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_COMMANDE',
        'ARCHIVE',
        'ORDRE',
        'ID_SAISIE_ACHAT',
        'ID_BON_RECEPTION'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDCOMMANDE() {
		return $this->ID_COMMANDE;
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
	public function getIDSAISIEACHAT() {
		return $this->ID_SAISIE_ACHAT;
	}

	/**
	 * @return mixed
	 */
	public function getIDBONRECEPTION() {
		return $this->ID_BON_RECEPTION;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMMANDE($value) {
		$this->ID_COMMANDE = $value;
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
	public function setIDSAISIEACHAT($value) {
		$this->ID_SAISIE_ACHAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDBONRECEPTION($value) {
		$this->ID_BON_RECEPTION = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}