<?php

namespace App\Services;

use App\Models\EstateObject;
use App\Http\Requests\EstateObjectStoreRequest;

class EstateObjectService
{
    /**
     * @var PhotoService
     */
    protected PhotoService $photoService;

    /**
     * EstateObjectService constructor.
     */
    public function __construct()
    {
        $this->photoService = new PhotoService();
    }

    /**
     * @param EstateObjectStoreRequest $request
     * @return EstateObject|null
     */
    protected function create(EstateObjectStoreRequest $request): ?EstateObject
    {
        $estateObject = new EstateObject();

        $estateObject->description = $request->description;
        $estateObject->address = $request->address;
        $estateObject->lat = $request->lat;
        $estateObject->lng = $request->lng;

        return ($estateObject->save() ? $estateObject : null);
    }

    /**
     * @param EstateObjectStoreRequest $request
     */
    public function addEstateObject(EstateObjectStoreRequest $request)
    {
        $estateObject = $this->create($request);
        if (empty($estateObject)) {
            //toDo бросаем исключение
        }
        $this->photoService->create($request->file('images'), $estateObject);
    }
}
