<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aerolinea
 *
 * @property $id
 * @property $nombreAerolinea
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Aeronav[] $aeronavs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aerolinea extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreAerolinea', 'estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aeronavs()
    {
        return $this->hasMany(\App\Models\Aeronav::class, 'id', 'idAerolinea');
    }
    

}
