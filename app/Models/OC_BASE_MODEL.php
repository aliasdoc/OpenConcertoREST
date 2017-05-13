<?php

namespace App\models;

use App\Models\Common\OC_SOCIETECOMMON;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Token;
use Lcobucci\JWT\Parser;

class OC_BASE_MODEL extends Model
{
    protected $schema;

    function __construct() {
        $request = request();

        $bearerToken = $request->bearerToken();
        $tokenId = (new Parser())->parse($bearerToken)->getHeader('jti');
        $client = Token::find($tokenId)->client;

        $company = OC_SOCIETECOMMON::where('ID', $client->company_id)->first();

        $this->schema = $company->DATABASE_NAME;
        $this->setTable($this->schema. '.' . $this->table);
    }

}
