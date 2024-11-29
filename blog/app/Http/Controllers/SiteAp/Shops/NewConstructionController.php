<?php

namespace App\Http\Controllers\SiteAp\Shops;

use App\Exceptions\ReshopNaviBaseException;
use App\Exceptions\ReshopNaviNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\SiteAp\Shops\NewConstructionRequest;
use App\Http\Requests\SiteAp\Shops\NewConstructionStoreRequest;
use App\Http\UseCases\SiteAp\Shops\NewConstructionShowUseCaseInterface;
use App\Http\UseCases\SiteAp\Shops\NewConstructionStoreUseCaseInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewConstructionController extends Controller
{
    public function __construct(
        protected NewConstructionShowUseCaseInterface $newConstructionShowUseCase,
        protected NewConstructionStoreUseCaseInterface $newConstructionStoreUseCase
    ) {
    }

    /**
     * Show the add|edit screen for a shop's new construction detail.
     *
     * @param  NewConstructionRequest  $request
     * @return View
     *
     * @throws ReshopNaviNotFoundException
     */
    public function show(NewConstructionRequest $request): View
    {
        return $this->newConstructionShowUseCase->handle(newConstructionModel: $request->generateNewConstructionModel());
    }

    /**
     * Handles the update or creation of a new construction shop detail and redirects upon success.
     *
     * @param  NewConstructionStoreRequest  $request
     * @return RedirectResponse
     *
     * @throws ReshopNaviBaseException
     */
    public function update(NewConstructionStoreRequest $request): RedirectResponse
    {
        return $this->newConstructionStoreUseCase->handle(newConstructionStoreModel: $request->generateNewConstructionStoreModel());
    }
}
