<?php

namespace App\Repositories\DTOs;

use App\DTOs\NewConstructionShopDetailDto;

interface NewConstructionShopDetailDtoRepositoryInterface
{
    /**
     * Find a NewConstructionShopDetailDTo by its Shop ID.
     *
     * @param  int  $shopId
     * @return NewConstructionShopDetailDto|null
     */
    public function findByShopId(int $shopId): ?NewConstructionShopDetailDto;
}
