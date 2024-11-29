<?php

namespace App\Repositories\DTOs;

use App\DTOs\NewConstructionShopDetailDto;
use App\Queries\Models\NewConstructionShopDetailQueryInterface;

class NewConstructionShopDetailDtoRepository implements NewConstructionShopDetailDtoRepositoryInterface
{
    public function __construct(
        protected NewConstructionShopDetailQueryInterface $newConstructionShopDetailQuery
    ) {
    }

    /**
     * Find a NewConstructionShopDetailDTo by its Shop ID.
     *
     * @param  int  $shopId
     * @return NewConstructionShopDetailDto|null
     */
    public function findByShopId(int $shopId): ?NewConstructionShopDetailDto
    {
        $newConstructionShopDetail = $this->newConstructionShopDetailQuery->findByShopId(shopId: $shopId);

        if (is_null($newConstructionShopDetail)) {
            return null;
        }

        return new NewConstructionShopDetailDto(
            shopId: $newConstructionShopDetail->shop_id,
            caseUrl: $newConstructionShopDetail->case_url,
            referencePricePerTsuboMinimum: $newConstructionShopDetail->reference_price_per_tsubo_minimum,
            referencePricePerTsuboMaximum: $newConstructionShopDetail->reference_price_per_tsubo_maximum,
            referencePriceMinimum: $newConstructionShopDetail->reference_price_minimum,
            referencePriceMaximum: $newConstructionShopDetail->reference_price_maximum,
            priceAverage: $newConstructionShopDetail->price_average,
            title: $newConstructionShopDetail->title,
            publicationPriority: $newConstructionShopDetail->publication_priority,
        );
    }
}
