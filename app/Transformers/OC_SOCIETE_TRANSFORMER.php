<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 28/04/2017
 * Time: 14:12
 */
namespace App\Transformers;

use App\Models\Common\OC_SOCIETECOMMON;
use League\Fractal\TransformerAbstract;

class OC_SOCIETE_TRANSFORMER extends TransformerAbstract
{
    public function transform(OC_SOCIETECOMMON $model)
    {
        return [
            'id' => $model->ID,
            'database' => $model->DATABASE_NAME,
            'nom' => $model->NOM,
            'siret' => $model->NUM_SIRET,
            'nii' => $model->NIM_NII,
            'ape' => $model->NUM_APE,
            'telephone' => $model->NUM_TEL,
            'fax' => $model->NUM_FAX,
            'email' => $model->MAIL,
            'rcs' => $model->RCS,
            'capital' => $model->CAPITAL,
            'iban' => $model->IBAN,
            'bic' => $model->BIC,
        ];
    }
}