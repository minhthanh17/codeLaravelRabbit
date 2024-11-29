<?php

namespace App\Http\UseCases\SiteAp\Shops;

use App\Exceptions\ReshopNaviBaseException;
use App\Http\RequestModels\SiteAp\Shops\NewConstructionStoreModel;
use App\Repositories\Models\NewConstructionShopDetailRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class NewConstructionStoreUseCase implements NewConstructionStoreUseCaseInterface
{
    public function __construct(
        protected NewConstructionShopDetailRepositoryInterface $newConstructionShopDetailRepository
    ) {
    }

    /**
     * Handles the update or creation of a new construction shop detail and redirects upon success.
     *
     * @param  NewConstructionStoreModel  $newConstructionStoreModel
     * @return RedirectResponse
     *
     * @throws ReshopNaviBaseException
     */
    public function handle(NewConstructionStoreModel $newConstructionStoreModel): RedirectResponse
    {
        DB::beginTransaction();
        try {
            $this->newConstructionShopDetailRepository->updateOrCreate(
                shopId: $newConstructionStoreModel->shopId,
                caseUrl: $newConstructionStoreModel->caseUrl,
                referencePricePerTsuboMinimum: $newConstructionStoreModel->referencePricePerTsuboMinimum,
                referencePricePerTsuboMaximum: $newConstructionStoreModel->referencePricePerTsuboMaximum,
                referencePriceMinimum: $newConstructionStoreModel->referencePriceMinimum,
                referencePriceMaximum: $newConstructionStoreModel->referencePriceMaximum,
                priceAverage: $newConstructionStoreModel->priceAverage,
                title: $newConstructionStoreModel->title,
                publicationPriority: $newConstructionStoreModel->publicationPriority,
            );
            DB::commit();

            return redirect(route('site_ap.shops.new_construction', $newConstructionStoreModel->shopId))->with('success', '登録に成功しました。');
        } catch (ReshopNaviBaseException $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
