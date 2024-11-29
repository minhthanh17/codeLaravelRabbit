<?php

namespace App\Repositories\Models;

use App\Exceptions\ReshopNaviDatabaseInsertUpdateException;
use App\Models\NewConstructionShopDetail;
use App\Queries\Models\NewConstructionShopDetailQueryInterface;
use Throwable;

class NewConstructionShopDetailRepository implements NewConstructionShopDetailRepositoryInterface
{
    public function __construct(
        protected NewConstructionShopDetailQueryInterface $newConstructionShopDetailQuery,
    ) {
    }

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
    ): NewConstructionShopDetail {
        try {
            $newConstructionShopDetailQuery = $this->newConstructionShopDetailQuery->updateOrCreate(
                shopId: $shopId,
                caseUrl: $caseUrl,
                referencePricePerTsuboMinimum: $referencePricePerTsuboMinimum,
                referencePricePerTsuboMaximum: $referencePricePerTsuboMaximum,
                referencePriceMinimum: $referencePriceMinimum,
                referencePriceMaximum: $referencePriceMaximum,
                priceAverage: $priceAverage,
                title: $title,
                publicationPriority: $publicationPriority,
            );
        } catch (Throwable $th) {
            throw new ReshopNaviDatabaseInsertUpdateException($th);
        }

        return $newConstructionShopDetailQuery;
    }
}
