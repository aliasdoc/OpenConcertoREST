<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Company\OC_CLIENT;
use League\Fractal\TransformerAbstract;

class OC_CLIENT_TRANSFORMER extends TransformerAbstract
{
    public function transform(OC_CLIENT $model)
    {
        return [
            'id' => $model->ID,
            'code' => $model->CODE,
            'nom' => $model->NOM,
            'forme_juridique' => $model->FORME_JURIDIQUE,
            'tva' => $model->NUMERO_TVA
        ];
    }
}