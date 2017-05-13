<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Modules\Project\OC_AFFAIRE;
use League\Fractal\TransformerAbstract;

class OC_AFFAIRE_TRANSFORMER extends TransformerAbstract
{
    function __construct($includes = [])
    {
        $this->defaultIncludes = $includes;
    }
    /*
    protected $defaultIncludes = [
        'client',
        'devis'
    ]; */

    public function includeClient(OC_AFFAIRE $model)
    {
        return $this->item($model->client, new OC_CLIENT_TRANSFORMER());
    }

    public function includeDevis(OC_AFFAIRE $model)
    {
        return $this->item($model->devis, new OC_DEVIS_TRANSFORMER());
    }

    public function transform(OC_AFFAIRE $model)
    {
        return [
            'id' => $model->ID,
            'numero' => $model->NUMERO,
            'nom' => $model->NOM,
            'infos' => $model->INFOS,
            'date' => $model->DATE,
            'etat' => $model->etat ? $model->etat->NOM : null,
            'type' => $model->type ? $model->type->NOM : null
        ];
    }
}