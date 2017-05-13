<?php
/**
 * Created by PhpStorm.
 * Author: OUJABER Mohamed
 * Date: 01/05/2017
 * Time: 19:44
 */
namespace App\Serializers;

use League\Fractal\Serializer\DataArraySerializer;

class NoDataArraySerializer extends DataArraySerializer
{
    public function mergeIncludes($transformedData, $includedData)
    {
        $includedData = array_map(function ($include) {
            return $include['data'];
        }, $includedData);

        return parent::mergeIncludes($transformedData, $includedData);
    }
}