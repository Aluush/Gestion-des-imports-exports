<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operateur extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='operateurs';
    public $timestamps = false ;

    // protected $fillable = [
    //     'centre_rc', 'numero_rc', 'password', 'banned', 'role',
    // ];

    protected $guarded=[''];

  /**
 * Get all of the comments for the Reclamation
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function reclamations()
{
    return $this->hasMany(Reclamation::class, 'operateur_id');
}

public function dums()
{
    return $this->hasMany(Dum::class, 'operateur_id');
}

public function reds()
{
    return $this->hasMany(Red::class, 'operateur_id');
}

public function reds__details()
{
    return $this->hasMany(Reds__detail::class, 'operateur_id');
}

public function situations_trans()
{
    return $this->hasMany(Situations_tran::class, 'operateur_id');
}


}
