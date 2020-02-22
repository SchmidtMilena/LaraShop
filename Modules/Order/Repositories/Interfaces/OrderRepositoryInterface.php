<?php

declare(strict_types=1);

namespace Modules\Order\Repositories\Interfaces;

use Modules\Order\Entities\Order;
use Illuminate\Support\Collection;
use Illuminate\Database\Query\Builder;

interface OrderRepositoryInterface
{
    public function find(int $id): ?Order;

    public function findByClient(int $client_id): Collection;

    public function getDataTableBuilder(): Builder;

    public function create(array $data): Order;

    public function update(array $data, int $id): bool;

    public function delete(int $id): bool;

    public function attachProduct(int $order_id, int $product_id):? bool;

    public function detachProduct(int $order_id, int $product_id):? int;
}
