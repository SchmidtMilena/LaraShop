<?php

namespace Modules\Basket\Repositories;

use Modules\Entities\Pivots\BasketProducts;

class BasketRepository implements BasketRepositoryInterface
{
    public function addItem(array $data): BasketProducts
    {
        return BasketProducts::create($data);
    }

    public function removeItem(integer $id): boolean
    {
        return BasketProducts::find($id)->delete();
    }
}