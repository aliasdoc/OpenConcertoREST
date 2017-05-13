<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Company\OC_DEVISELEMENT;
use League\Fractal\TransformerAbstract;

class OC_DEVISELEMENT_TRANSFORMER extends TransformerAbstract
{
    public function transform(OC_DEVISELEMENT $model)
    {
        return [
            'id' => $model->ID_DEVIS_ELEMENT,
            'code' => $model->CODE,
            'nom' => $model->NOM,
            'code' => $model->CODE,
            'ordre' => $model->ORDRE,
            'descriptif' => $model->DESCRIPTIF,
            'quantite' => $model->QTE,
            'prix_vente_HT' => $model->T_PV_HT,
            'prix_vente_TTC' => $model->T_PV_TTC,
            'is_service' => $model->SERVICE
        ];
    }
}