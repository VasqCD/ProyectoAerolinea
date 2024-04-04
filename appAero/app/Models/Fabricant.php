<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fabricant
 *
 * @property $id
 * @property $nombreFabricante
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Aeronav[] $aeronavs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fabricant extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreFabricante', 'estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aeronavs()
    {
        return $this->hasMany(\App\Models\Aeronav::class, 'id', 'idFabricante');
    }
    

}
