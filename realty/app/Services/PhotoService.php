<?php

namespace App\Services;

use App\Models\EstateObject;
use App\Models\Photo;

class PhotoService
{
    /**
     * @param array $images
     * @param EstateObject $estateObject
     */
    public function create(array $images, EstateObject $estateObject)
    {
        foreach ($images as $image) {
            $path = $image->store('/images/' . $this->generateDir());
            $photo = new Photo();
            $photo->estate_object_id = $estateObject->id;
            $photo->path = $path;

            if (!$photo->save()) {
                //toDo исключение, ошибка сохранения
            }
        }
    }

    /**
     * Возвращает случайный путь (для загрузки фото)
     *
     * @return string
     */
    protected function generateDir(): string
    {
        return substr(md5(microtime()), mt_rand(0, 30), 2)
            . '/'
            . substr(md5(microtime()), mt_rand(0, 30), 2);
    }
}
