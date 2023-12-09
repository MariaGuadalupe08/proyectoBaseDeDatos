<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileModel extends Model
{
    use SoftDeletes;

    protected $DBGroup          = 'default';
    protected $table            = 'profiles';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $primaryKey = 'profile_id';
    protected $fillable = ['profile', 'description', 'status'];
    protected $dates = ['deleted_at'];

    // Relación con la tabla 'users'
    public function users()
    {
        return $this->hasMany(UserModel::class, 'profile', 'profile_id');
    }
}
