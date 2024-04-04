<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aeronav
 *
 * @property $id
 * @property $idAerolinea
 * @property $idFabricante
 * @property $nombreAeronave
 * @property $serie
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Aerolinea $aerolinea
 * @property Fabricant $fabricant
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aeronav extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idAerolinea', 'idFabricante', 'nombreAeronave', 'serie', 'estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function aerolinea()
    {
        return $this->belongsTo(\App\Models\Aerolinea::class, 'idAerolinea', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fabricant()
    {
        return $this->belongsTo(\App\Models\Fabricant::class, 'idFabricante', 'id');
    }
    

}
