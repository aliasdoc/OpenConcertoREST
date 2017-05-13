<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OC_RUBRIQUECOMM
 */
class OC_RUBRIQUECOMM extends Model
{
    protected $table = 'RUBRIQUE_COMM';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'CODE',
        'NB_BASE',
        'TAUX_SAL',
        'TAUX_PAT',
        'MONTANT_SAL_AJ',
        'MONTANT_SAL_DED',
        'MONTANT_PAT',
        'ORDRE',
        'ARCHIVE',
        'ID_PERIODE_VALIDITE',
        'ID_IMPRESSION_RUBRIQUE',
        'NOM_VISIBLE',
        'MONTANT'
    ];

    protected $guarded = [];

    
	/**
	 * @return mixed
	 */
	public function getNOM() {
		return $this->NOM;
	}

	/**
	 * @return mixed
	 */
	public function getCODE() {
		return $this->CODE;
	}

	/**
	 * @return mixed
	 */
	public function getNBBASE() {
		return $this->NB_BASE;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXSAL() {
		return $this->TAUX_SAL;
	}

	/**
	 * @return mixed
	 */
	public function getTAUXPAT() {
		return $this->TAUX_PAT;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTSALAJ() {
		return $this->MONTANT_SAL_AJ;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTSALDED() {
		return $this->MONTANT_SAL_DED;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANTPAT() {
		return $this->MONTANT_PAT;
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
	public function getIDPERIODEVALIDITE() {
		return $this->ID_PERIODE_VALIDITE;
	}

	/**
	 * @return mixed
	 */
	public function getIDIMPRESSIONRUBRIQUE() {
		return $this->ID_IMPRESSION_RUBRIQUE;
	}

	/**
	 * @return mixed
	 */
	public function getNOMVISIBLE() {
		return $this->NOM_VISIBLE;
	}

	/**
	 * @return mixed
	 */
	public function getMONTANT() {
		return $this->MONTANT;
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
	public function setCODE($value) {
		$this->CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNBBASE($value) {
		$this->NB_BASE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXSAL($value) {
		$this->TAUX_SAL = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setTAUXPAT($value) {
		$this->TAUX_PAT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTSALAJ($value) {
		$this->MONTANT_SAL_AJ = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTSALDED($value) {
		$this->MONTANT_SAL_DED = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANTPAT($value) {
		$this->MONTANT_PAT = $value;
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
	public function setIDPERIODEVALIDITE($value) {
		$this->ID_PERIODE_VALIDITE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDIMPRESSIONRUBRIQUE($value) {
		$this->ID_IMPRESSION_RUBRIQUE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOMVISIBLE($value) {
		$this->NOM_VISIBLE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMONTANT($value) {
		$this->MONTANT = $value;
		return $this;
	}


    function __construct() {
        $this->table =  'Common.' . $this->table;
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}