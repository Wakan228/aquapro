<?php

namespace App\Models\Phone;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedPhone extends Model
{
    use HasFactory;

    public static function uniquePhone($phone)
    {
        return self::where('phone', $phone)->first();
    }
}
