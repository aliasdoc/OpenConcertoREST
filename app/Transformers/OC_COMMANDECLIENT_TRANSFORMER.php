<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Company\OC_COMMANDECLIENT;
use League\Fractal\TransformerAbstract;

class OC_COMMANDECLIENT_TRANSFORMER extends TransformerAbstract
{
    protected $defaultIncludes = [
        'client',
        'contact',
        'elements',
    ];

    public function includeElements(OC_COMMANDECLIENT $model)
    {
        return $this->collection($model->elements->sortBy('ORDRE'), new OC_COMMANDECLIENTELEMENT_TRANSFORMER());
    }

    public function includeClient(OC_COMMANDECLIENT $model)
    {
        return $this->item($model->client, new OC_CLIENT_TRANSFORMER());
    }

    public function includeContact(OC_COMMANDECLIENT $model)
    {
        return $this->item($model->contact, new OC_CONTACT_TRANSFORMER());
    }

    public function transform(OC_COMMANDECLIENT $model)
    {
        return [
            'id' => $model->ID_DEVIS,
            'date' => $model->DATE,
            'numero' => $model->NUMERO,
            'objet' => $model->OBJET,
            'infos' => $model->INFOS,
            'oa_client' => $model->NUMERO_EXPEDITION,
            'date_envoi' => $model->DATE_ENVOI,
            'date_validite' => $model->DATE_VALIDITE,
            'total_HT' => $model->T_HT,
            'total_TVA' => $model->T_TVA,
            'total_TTC' => $model->T_TTC
        ];
    }
}