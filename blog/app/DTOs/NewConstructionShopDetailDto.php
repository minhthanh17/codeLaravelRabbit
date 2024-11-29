<?php

namespace App\DTOs;

class NewConstructionShopDetailDto
{
    /**
     * @param  int  $shop_id
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
        public readonly int $shop_id,
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
