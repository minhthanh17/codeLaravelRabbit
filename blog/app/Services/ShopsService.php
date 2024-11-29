<?php

namespace App\Services;

use App\Models\Shop;


/**
 * Shopに関するServiceクラス
 *
 * TODO: エリアカテゴリー、エリアで使用する会社情報のカラムは揃えたので、DTO、Repository、Queryを作成し他でも使いまわせるようにする
 */
class ShopsService
{
    public function selectShopById(int $shopId)
    {
        return Shop::where('id', $shopId)->select('id', 'name', 'new_construction', 'new_construction_document')->first();
    }
}
