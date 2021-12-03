<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $placavehiculo
 * @property $tipovehiculo
 * @property $añovehiculo
 * @property $marcavehiculo
 * @property $empresavehiculo
 * @property $estadovechiculo
 * @property $idtipocombustibles
 * @property $created_at
 * @property $updated_at
 *
 * @property Tipocombustible $tipocombustible
 * @property Valescombustible[] $valescombustibles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'placavehiculo' => 'required',
		'tipovehiculo' => 'required',
		'añovehiculo' => 'required',
		'marcavehiculo' => 'required',
		'empresavehiculo' => 'required',
		'estadovechiculo' => 'required',
		'idtipocombustibles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['placavehiculo','tipovehiculo','añovehiculo','marcavehiculo','empresavehiculo','estadovechiculo','idtipocombustibles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipocombustible()
    {
        return $this->hasOne('App\Models\Tipocombustible', 'id', 'idtipocombustibles');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valescombustibles()
    {
        return $this->hasMany('App\Models\Valescombustible', 'idvehiculos', 'id');
    }
    

}
