<?php

namespace App\Queries\Models;

use App\Models\NewConstructionShopDetail;

class NewConstructionShopDetailQuery implements NewConstructionShopDetailQueryInterface
{
    /**
     * Retrieves the NewConstructionShopDetail record associated with the given shop ID.
     *
     * @param  int  $shopId
     * @return NewConstructionShopDetail|null
     */
    public function findByShopId(int $shopId): ?NewConstructionShopDetail
    {
        return NewConstructionShopDetail::where('shop_id', $shopId)->first();
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
        return NewConstructionShopDetail::updateOrCreate([
            'shop_id' => $shopId,
        ], [
            'case_url' => $caseUrl,
            'reference_price_per_tsubo_minimum' => $referencePricePerTsuboMinimum,
            'reference_price_per_tsubo_maximum' => $referencePricePerTsuboMaximum,
            'reference_price_minimum' => $referencePriceMinimum,
            'reference_price_maximum' => $referencePriceMaximum,
            'price_average' => $priceAverage,
            'title' => $title,
            'publication_priority' => $publicationPriority,
        ]);
    }
}
