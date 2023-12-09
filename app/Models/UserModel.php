<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserModel extends Model
{
    use SoftDeletes;

    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey = 'users_id';
    protected $fillable = ['username', 'password', 'status', 'profile'];
    protected $dates = ['deleted_at'];

    // Relación con la tabla 'profile'
    public function profile()
    {
        return $this->belongsTo(ProfileModel::class, 'profile', 'profile_id');
    }

    // Relación con la tabla 'userinfo'
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'users_id');
    }

    // Relación con la tabla 'Hoteles'
    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'users_id');
    }

    // Relación con la tabla 'Gastronomia'
    public function gastronomy()
    {
        return $this->hasOne(Gastronomia::class, 'users_id');
    }

    // Relación con la tabla 'LugaresTuristicos'
    public function touristicPlaces()
    {
        return $this->hasMany(LugaresTuristicos::class, 'users_id');
    }

    // Relación con la tabla 'Festividades'
    public function festivities()
    {
        return $this->hasMany(Festividades::class, 'users_id');
    }
}
