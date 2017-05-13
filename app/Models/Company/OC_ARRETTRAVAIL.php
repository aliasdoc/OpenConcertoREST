<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ARRETTRAVAIL
 */
class OC_ARRETTRAVAIL extends OC_BASE_MODEL
{
    protected $table = 'ARRET_TRAVAIL';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'ID_SALARIE',
        'DATE_DERNIER_JOUR_TRAV',
        'DATE_FIN_PREV',
        'SUBROGATION',
        'DATE_DEBUT_SUBROGATION',
        'DATE_FIN_SUBROGATION',
        'ID_MOTIF_ARRET_TRAVAIL',
        'ID_MOTIF_REPRISE_ARRET_TRAVAIL',
        'DATE_REPRISE',
        'DATE_ACCIDENT',
        'ARCHIVE',
        'ORDRE',
        'DATE',
        'COMMENTAIRES'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getIDSALARIE() {
		return $this->ID_SALARIE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEDERNIERJOURTRAV() {
		return $this->DATE_DERNIER_JOUR_TRAV;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFINPREV() {
		return $this->DATE_FIN_PREV;
	}

	/**
	 * @return mixed
	 */
	public function getSUBROGATION() {
		return $this->SUBROGATION;
	}

	/**
	 * @return mixed
	 */
	public function getDATEDEBUTSUBROGATION() {
		return $this->DATE_DEBUT_SUBROGATION;
	}

	/**
	 * @return mixed
	 */
	public function getDATEFINSUBROGATION() {
		return $this->DATE_FIN_SUBROGATION;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOTIFARRETTRAVAIL() {
		return $this->ID_MOTIF_ARRET_TRAVAIL;
	}

	/**
	 * @return mixed
	 */
	public function getIDMOTIFREPRISEARRETTRAVAIL() {
		return $this->ID_MOTIF_REPRISE_ARRET_TRAVAIL;
	}

	/**
	 * @return mixed
	 */
	public function getDATEREPRISE() {
		return $this->DATE_REPRISE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEACCIDENT() {
		return $this->DATE_ACCIDENT;
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
	public function getDATE() {
		return $this->DATE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMMENTAIRES() {
		return $this->COMMENTAIRES;
	}


    
	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDSALARIE($value) {
		$this->ID_SALARIE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEDERNIERJOURTRAV($value) {
		$this->DATE_DERNIER_JOUR_TRAV = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFINPREV($value) {
		$this->DATE_FIN_PREV = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setSUBROGATION($value) {
		$this->SUBROGATION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEDEBUTSUBROGATION($value) {
		$this->DATE_DEBUT_SUBROGATION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEFINSUBROGATION($value) {
		$this->DATE_FIN_SUBROGATION = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOTIFARRETTRAVAIL($value) {
		$this->ID_MOTIF_ARRET_TRAVAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDMOTIFREPRISEARRETTRAVAIL($value) {
		$this->ID_MOTIF_REPRISE_ARRET_TRAVAIL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEREPRISE($value) {
		$this->DATE_REPRISE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEACCIDENT($value) {
		$this->DATE_ACCIDENT = $value;
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
	public function setDATE($value) {
		$this->DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMMENTAIRES($value) {
		$this->COMMENTAIRES = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}