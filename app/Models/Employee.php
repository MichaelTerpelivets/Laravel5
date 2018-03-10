<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employee extends Model
{
    use Notifiable;

    /**
     * Table
     * @var string
     */
    protected $table = 'employee';

    /**
     * Attribute
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'phone',
    ];
}
