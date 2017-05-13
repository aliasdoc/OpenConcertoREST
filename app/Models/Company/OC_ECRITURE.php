<?php

namespace App\Models\Company;

use App\Models\OC_BASE_MODEL;

/**
 * Class OC_ECRITURE
 */
class OC_ECRITURE extends OC_BASE_MODEL
{
    protected $table = 'ECRITURE';

    protected $primaryKey = 'ID';

	public $timestamps = false;

    protected $fillable = [
        'NOM',
        'ID_MOUVEMENT',
        'ID_COMPTE_PCE',
        'DATE',
        'DEBIT',
        'CREDIT',
        'ID_JOURNAL',
        'ARCHIVE',
        'VALIDE',
        'ORDRE',
        'POINTEE',
        'DATE_POINTEE',
        'DATE_VALIDE',
        'IDUSER_CREATE',
        'IDUSER_VALIDE',
        'IDUSER_DELETE',
        'LETTRAGE',
        'DATE_LETTRAGE',
        'MODIFICATION_DATE',
        'ID_USER_COMMON_MODIFY',
        'ID_USER_COMMON_CREATE',
        'CREATION_DATE',
        'JOURNAL_NOM',
        'JOURNAL_CODE',
        'COMPTE_NOM',
        'COMPTE_NUMERO',
        'DATE_EXPORT',
        'CODE_CLIENT',
        'NOM_PIECE'
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
	public function getIDMOUVEMENT() {
		return $this->ID_MOUVEMENT;
	}

	/**
	 * @return mixed
	 */
	public function getIDCOMPTEPCE() {
		return $this->ID_COMPTE_PCE;
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
	public function getDEBIT() {
		return $this->DEBIT;
	}

	/**
	 * @return mixed
	 */
	public function getCREDIT() {
		return $this->CREDIT;
	}

	/**
	 * @return mixed
	 */
	public function getIDJOURNAL() {
		return $this->ID_JOURNAL;
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
	public function getVALIDE() {
		return $this->VALIDE;
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
	public function getPOINTEE() {
		return $this->POINTEE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEPOINTEE() {
		return $this->DATE_POINTEE;
	}

	/**
	 * @return mixed
	 */
	public function getDATEVALIDE() {
		return $this->DATE_VALIDE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCREATE() {
		return $this->IDUSER_CREATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERVALIDE() {
		return $this->IDUSER_VALIDE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERDELETE() {
		return $this->IDUSER_DELETE;
	}

	/**
	 * @return mixed
	 */
	public function getLETTRAGE() {
		return $this->LETTRAGE;
	}

	/**
	 * @return mixed
	 */
	public function getDATELETTRAGE() {
		return $this->DATE_LETTRAGE;
	}

	/**
	 * @return mixed
	 */
	public function getMODIFICATIONDATE() {
		return $this->MODIFICATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONMODIFY() {
		return $this->ID_USER_COMMON_MODIFY;
	}

	/**
	 * @return mixed
	 */
	public function getIDUSERCOMMONCREATE() {
		return $this->ID_USER_COMMON_CREATE;
	}

	/**
	 * @return mixed
	 */
	public function getCREATIONDATE() {
		return $this->CREATION_DATE;
	}

	/**
	 * @return mixed
	 */
	public function getJOURNALNOM() {
		return $this->JOURNAL_NOM;
	}

	/**
	 * @return mixed
	 */
	public function getJOURNALCODE() {
		return $this->JOURNAL_CODE;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPTENOM() {
		return $this->COMPTE_NOM;
	}

	/**
	 * @return mixed
	 */
	public function getCOMPTENUMERO() {
		return $this->COMPTE_NUMERO;
	}

	/**
	 * @return mixed
	 */
	public function getDATEEXPORT() {
		return $this->DATE_EXPORT;
	}

	/**
	 * @return mixed
	 */
	public function getCODECLIENT() {
		return $this->CODE_CLIENT;
	}

	/**
	 * @return mixed
	 */
	public function getNOMPIECE() {
		return $this->NOM_PIECE;
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
	public function setIDMOUVEMENT($value) {
		$this->ID_MOUVEMENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDCOMPTEPCE($value) {
		$this->ID_COMPTE_PCE = $value;
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
	public function setDEBIT($value) {
		$this->DEBIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREDIT($value) {
		$this->CREDIT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDJOURNAL($value) {
		$this->ID_JOURNAL = $value;
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
	public function setVALIDE($value) {
		$this->VALIDE = $value;
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
	public function setPOINTEE($value) {
		$this->POINTEE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEPOINTEE($value) {
		$this->DATE_POINTEE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEVALIDE($value) {
		$this->DATE_VALIDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCREATE($value) {
		$this->IDUSER_CREATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERVALIDE($value) {
		$this->IDUSER_VALIDE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERDELETE($value) {
		$this->IDUSER_DELETE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setLETTRAGE($value) {
		$this->LETTRAGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATELETTRAGE($value) {
		$this->DATE_LETTRAGE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setMODIFICATIONDATE($value) {
		$this->MODIFICATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONMODIFY($value) {
		$this->ID_USER_COMMON_MODIFY = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setIDUSERCOMMONCREATE($value) {
		$this->ID_USER_COMMON_CREATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCREATIONDATE($value) {
		$this->CREATION_DATE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setJOURNALNOM($value) {
		$this->JOURNAL_NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setJOURNALCODE($value) {
		$this->JOURNAL_CODE = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPTENOM($value) {
		$this->COMPTE_NOM = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCOMPTENUMERO($value) {
		$this->COMPTE_NUMERO = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setDATEEXPORT($value) {
		$this->DATE_EXPORT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setCODECLIENT($value) {
		$this->CODE_CLIENT = $value;
		return $this;
	}

	/**
	 * @param $value
	 * @return $this
	 */
	public function setNOMPIECE($value) {
		$this->NOM_PIECE = $value;
		return $this;
	}


    function __construct() {
        parent::__construct();
        $this->connection = env('OC_DB_CONNECTION', 'oc');
    }

}