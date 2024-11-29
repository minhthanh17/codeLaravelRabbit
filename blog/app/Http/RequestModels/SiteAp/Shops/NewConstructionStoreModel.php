<?php

namespace App\Http\RequestModels\SiteAp\Shops;

class NewConstructionStoreModel
{
    /**
     * @param  int  $shopId
     * @param  string  $caseUrl
     * @param  int  $referencePricePerTsuboMinimum
     * @param  int  $referencePricePerTsuboMaximum
     * @param  int  $referencePriceMinimum
     * @param  int  $referencePriceMaximum
     * @param  int  $priceAverage
     * @param  string  $title
     * @param  int  $publicationPriority
     */
    public function __construct(
        public readonly int $shopId,
        public readonly string $caseUrl,
        public readonly int $referencePricePerTsuboMinimum,
        public readonly int $referencePricePerTsuboMaximum,
        public readonly int $referencePriceMinimum,
        public readonly int $referencePriceMaximum,
        public readonly int $priceAverage,
        public readonly string $title,
        public readonly int $publicationPriority,
    ) {
    }
}
