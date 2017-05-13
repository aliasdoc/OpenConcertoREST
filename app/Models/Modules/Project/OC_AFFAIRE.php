<?php

namespace App\Models\Modules\Project;

use App\Models\OC_BASE_MODEL;
use App\Models\Company\OC_CLIENT;
use App\Models\Company\OC_DEVIS;

/**
 * Class OC_AFFAIRE
 */
class OC_AFFAIRE extends OC_BASE_MODEL
{
    protected $table = 'AFFAIRE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NUMERO',
        'NOM',
        'INFOS',
        'ID_CLIENT',
        'ID_DEVIS',
        'DATE',
        'ID_COMMERCIAL',
        'ID_ETAT_AFFAIRE',
        'ID_TYPE_AFFAIRE',
        'ARCHIVE',
        'ORDRE'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNUMERO() {
		return $this->NUMERO;
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
	public function getINFOS() {
		return $this->INFOS;
	}

	/**
	 * @return mixed
	 */
	public function getIDCLIENT() {
		return $this->ID_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDDEVIS() {
		return $this->ID_DEVIS;
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
	public function getIDCOMMERCIAL() {
		return $this->ID_COMMERCIAL;
	}

	/**
	 * @return mixed
	 */
	public function getIDETATAFFAIRE() {
		return $this->ID_ETAT_AFFAIRE;
	}

	/**
	 * @return mixed
	 */
	public function getIDTYPEAFFAIRE() {
		return $this->ID_TYPE_AFFAIRE;
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
	public function setNUMERO($value) {
		$this->NUMERO = $value;
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
	public function setINFOS($value) {
		$this->INFOS = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCLIENT($value) {
		$this->ID_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDDEVIS($value) {
		$this->ID_DEVIS = $value;
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
	public function setIDCOMMERCIAL($value) {
		$this->ID_COMMERCIAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDETATAFFAIRE($value) {
		$this->ID_ETAT_AFFAIRE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDTYPEAFFAIRE($value) {
		$this->ID_TYPE_AFFAIRE = $value;
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
		parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

	public function client()
	{
		return $this->belongsTo(OC_CLIENT::class, "ID_CLIENT");
	}

	public function devis()
	{
		return $this->belongsTo(OC_DEVIS::class, "ID_DEVIS");
	}

	public function etat()
	{
		return $this->belongsTo(OC_ETATAFFAIRE::class, "ID_ETAT_AFFAIRE");
	}

	public function type()
	{
		return $this->belongsTo(OC_TYPEAFFAIRE::class, "ID_TYPE_AFFAIRE");
	}
}