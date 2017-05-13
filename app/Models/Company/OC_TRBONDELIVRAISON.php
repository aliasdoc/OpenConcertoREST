<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_TRBONDELIVRAISON
 */
class OC_TRBONDELIVRAISON extends OC_BASE_MODEL
{
    protected $table = 'TR_BON_DE_LIVRAISON';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_BON_DE_LIVRAISON',
        'ARCHIVE',
        'ORDRE',
        'ID_SAISIE_VENTE_FACTURE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDBONDELIVRAISON() {
		return $this->ID_BON_DE_LIVRAISON;
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
	public function getIDSAISIEVENTEFACTURE() {
		return $this->ID_SAISIE_VENTE_FACTURE;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDBONDELIVRAISON($value) {
		$this->ID_BON_DE_LIVRAISON = $value;
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
	public function setIDSAISIEVENTEFACTURE($value) {
		$this->ID_SAISIE_VENTE_FACTURE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}