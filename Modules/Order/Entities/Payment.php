<?php

declare(strict_types=1);

namespace Modules\Order\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Payment extends Model
{
    protected $fillable = [
        'name'
    ];
}
