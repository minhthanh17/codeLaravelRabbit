<?php

namespace App\Http\UseCases\SiteAp\Shops;

use App\Exceptions\ReshopNaviBaseException;
use App\Http\RequestModels\SiteAp\Shops\NewConstructionStoreModel;
use Illuminate\Http\RedirectResponse;

interface NewConstructionStoreUseCaseInterface
{
    /**
     * Handles the update or creation of a new construction shop detail and redirects upon success.
     *
     * @param  NewConstructionStoreModel  $newConstructionStoreModel
     * @return RedirectResponse
     *
     * @throws ReshopNaviBaseException
     */
    public function handle(NewConstructionStoreModel $newConstructionStoreModel): RedirectResponse;
}
