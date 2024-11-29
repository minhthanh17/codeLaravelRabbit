<?php

namespace App\Http\UseCases\SiteAp\Shops;

use App\Exceptions\ReshopNaviNotFoundException;
use App\Http\RequestModels\SiteAp\Shops\NewConstructionModel;
use Illuminate\View\View;

interface NewConstructionShowUseCaseInterface
{
    /**
     * Show the add|edit screen for a shop's new construction detail.
     *
     * @param  NewConstructionModel  $newConstructionModel
     * @return View
     *
     * @throws ReshopNaviNotFoundException
     */
    public function handle(NewConstructionModel $newConstructionModel): View;
}
