<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstateObjectStoreRequest;
use App\Services\EstateObjectService;

class EstateObjectController extends Controller
{
    /**
     * @var EstateObjectService
     */
    protected EstateObjectService $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->service = new EstateObjectService();
    }

    /**
     * @param EstateObjectStoreRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(EstateObjectStoreRequest $request)
    {
        $this->service->addEstateObject($request);
        return redirect(route('admin.home'));
    }
}
