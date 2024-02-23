<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'display_name',
        'password',
        'type_id',
        'phone',
        'adress_id',
        'verified',
        'invite_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static function getPhoneById($id)
    {
        return self::where('id', $id)->first();
    }
    static function passwordConfirm($user_id, $password)
    {
        return self::where('id', $user_id)->where('password', $password)->first();
    }
    static function updateUser($user_data, $user_id)
    {
        return self::where('id', $user_id)
            ->update([
                'phone' => $user_data['phone'],
                'name' => $user_data['name'],
                'surname' => $user_data['surname'],
                'display_name' => $user_data['display_name'],
                'email' => $user_data['email']
            ] + (isset($user_data['confirmePassword']) ? ['password' => Hash::make($user_data['confirmePassword'])] : []));
    }
}
