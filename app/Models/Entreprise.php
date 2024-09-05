<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entreprise
 *
 * @property $id
 * @property $raison_sociale
 * @property $ifu
 * @property $created_at
 * @property $updated_at
 *
 * @property Annex[] $annexes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Entreprise extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['raison_sociale', 'ifu'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function annexes()
    {
        return $this->hasMany(\App\Models\Annex::class, 'id', 'entreprise_id');
    }
    
}
