<?php

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\Interfaces\ProductRepositoryInterface;
use Modules\Product\Entities\Price;

class ProductRepository implements ProductRepositoryInterface
{
    public function find(int $id): ?Price
    {
        return Price::find($id);
    }

    public function create(array $data): Price
    {
        return Price::create($data);
    }

    public function update(array $data, int $id): bool
    {
        return $this->find($id)->update($data);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
