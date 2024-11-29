<?php

namespace App\Http\UseCases\SiteAp\Shops;

use App\Exceptions\ReshopNaviNotFoundException;
use App\Http\RequestModels\SiteAp\Shops\NewConstructionModel;
use App\Repositories\DTOs\NewConstructionShopDetailDtoRepositoryInterface;
use App\Services\ShopsService;
use Illuminate\View\View;

class NewConstructionShowUseCase implements NewConstructionShowUseCaseInterface
{
    public function __construct(
        protected ShopsService $shopsService,
        protected NewConstructionShopDetailDtoRepositoryInterface $newConstructionShopDetailRepository,
    ) {
    }

    /**
     * Show the add|edit screen for a shop's new construction detail.
     *
     * @param  NewConstructionModel  $newConstructionModel
     * @return View
     *
     * @throws ReshopNaviNotFoundException
     */
    public function handle(NewConstructionModel $newConstructionModel): View
    {
        $shop = $this->shopsService->selectShopById(shopId: $newConstructionModel->shopId);
        if (empty($shop) || ! ($shop->new_construction || $shop->new_construction_document)) {
            throw new ReshopNaviNotFoundException('This shop is not classified as new construction, shop id is: '.$newConstructionModel->shopId);
        }
        $newConstructionShopDetailDto = $this->newConstructionShopDetailRepository->findByShopId(shopId: $newConstructionModel->shopId);
        $data = [
            'shop' => $shop,
            'newConstructionShopDetailDto' => $newConstructionShopDetailDto,
        ];

        return view('site_ap.shops.new_construction.edit', $data);
    }
}
