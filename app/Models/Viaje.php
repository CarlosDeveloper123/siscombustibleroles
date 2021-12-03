<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $lugarsalida
 * @property $lugardestino
 * @property $idplantas
 * @property $cantidadviaje
 * @property $idvehiculos
 * @property $idconductores
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Planta $planta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    static $rules = [
		'lugarsalida' => 'required',
		'lugardestino',
		'idplantas' => 'required',
		'cantidadviaje' => 'required',
		'idvehiculos' => 'required',
		'idconductores' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lugarsalida','lugardestino','idplantas','cantidadviaje','idvehiculos','idconductores'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function conductore()
    {
        return $this->hasOne('App\Models\Conductore', 'id', 'idconductores');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planta()
    {
        return $this->hasOne('App\Models\Planta', 'id', 'idplantas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'idvehiculos');
    }
    

}
