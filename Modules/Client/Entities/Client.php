<?php

declare(strict_types=1);

namespace Modules\Client\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $email_verified_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */

class Client extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'password',
        'email',
        'first_name',
        'last_name',
    ];

    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
        'username' => 'string',
        'password' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email_verified_at' => 'datetime',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
