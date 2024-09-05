<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Annex
 *
 * @property $id
 * @property $ville
 * @property $entreprise_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Entreprise $entreprise
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Annex extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['ville', 'entreprise_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entreprise()
    {
        return $this->belongsTo(\App\Models\Entreprise::class, 'entreprise_id', 'id');
    }
    
}
