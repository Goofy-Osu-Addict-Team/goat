<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'username',
        'discriminator',
        'email',
        'avatar',
        'verified',
        'locale',
        'mfa_enabled',
        'refresh_token',
        'in_server',
    ];

     /**
     * Indicates if the model's ID is auto-incrementing.
     * 
     * @var boolean
     */
    public $incrementing = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'refresh_token',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }

    /**
     * Get all permissions of this user
     */
    public function getPermissionArray()
    {
        return $this->getAllPermissions()->mapWithKeys(fn($pr) => [$pr['name'] => true]);
    }

    /**
     * Get all roles of this user
     */
    public function getRolesArray()
    {
        return $this->getRoleNames()->mapWithKeys(fn($pr) => [$pr => true]);
    }
}
