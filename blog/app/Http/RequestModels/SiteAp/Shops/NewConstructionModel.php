<?php

namespace App\Http\RequestModels\SiteAp\Shops;

class NewConstructionModel
{
    /**
     * @param  int  $shopId
     */
    public function __construct(
        public readonly int $shopId,
    ) {
    }
}
