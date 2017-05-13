<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 27/04/2017
 * Time: 19:19
 */

namespace App\Transformers;

use App\Models\Common\OC_USERCOMMON;
use League\Fractal\TransformerAbstract;

class OC_USER_TRANSFORMER extends TransformerAbstract
{
    public function transform(OC_USERCOMMON $model)
    {
        return [
            'id' => $model->ID,
            'nom' => $model->NOM,
            'prenom' => $model->PRENOM,
            'surnom' => $model->SURNOM,
            'email' => $model->MAIL,
            'phone' => $model->TEL,
            'is_superuser' => $model->SUPERUSER,
            'is_admin' => $model->ADMIN,
            'is_disabled' => $model->DISABLED,
        ];
    }
}