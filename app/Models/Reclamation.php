<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $table ='reclamations';

    protected $fillable = [
        'theme',
        'sous_theme',
        'ville',
        'bureauD',
        'localisation',
        'objet',
        'message',
        'etat',
        'service',
        'description',
        'operateur_id',
    ];
    

    protected $hidden = [
        // 'password',
        // 'remember_token',
        // 'two_factor_recovery_codes',
        // 'two_factor_secret',
    ];

    /**
     * Get the user that owns the Reclamation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function operateur()
    // {
    //     return $this->belongsTo(Operateur::class, 'operateur_id');
    // }


}
