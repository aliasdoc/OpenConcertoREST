<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Company\OC_CONTACT;
use League\Fractal\TransformerAbstract;

class OC_CONTACT_TRANSFORMER extends TransformerAbstract
{
    protected $defaultIncludes = [
        'client'
    ];

    public function includeClient(OC_CONTACT $model)
    {
        return $this->item($model->client, new OC_CLIENT_TRANSFORMER());
    }

    public function transform(OC_CONTACT $model)
    {
        return [
            'id' => $model->ID,
            'nom' => $model->NOM,
            'prenom' => $model->PRENOM,
            'email' => $model->EMAIL
        ];
    }
}