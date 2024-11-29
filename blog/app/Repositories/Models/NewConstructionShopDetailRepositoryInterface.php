<?php

namespace App\Repositories\Models;

use App\Exceptions\ReshopNaviDatabaseInsertUpdateException;
use App\Models\NewConstructionShopDetail;

interface NewConstructionShopDetailRepositoryInterface
{
    /**
     * Update or create a new record in the NewConstructionShopDetail table.
     *
     * @param  int  $shopId
     * @param  string  $caseUrl
     * @param  int  $referencePricePerTsuboMinimum
     * @param  int  $referencePricePerTsuboMaximum
     * @param  int  $referencePriceMinimum
     * @param  int  $referencePriceMaximum
     * @param  int  $priceAverage
     * @param  string  $title
     * @param  int  $publicationPriority
     * @return NewConstructionShopDetail
     *
     * @throws ReshopNaviDatabaseInsertUpdateException
     */
    public function updateOrCreate(
        int $shopId,
        string $caseUrl,
        int $referencePricePerTsuboMinimum,
        int $referencePricePerTsuboMaximum,
        int $referencePriceMinimum,
        int $referencePriceMaximum,
        int $priceAverage,
        string $title,
        int $publicationPriority,
    ): NewConstructionShopDetail;
}
