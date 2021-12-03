<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planta
 *
 * @property $id
 * @property $nombreplanta
 * @property $direccionplanta
 * @property $distanciaplanta
 * @property $telefonoplanta
 * @property $estadoplanta
 * @property $created_at
 * @property $updated_at
 *
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planta extends Model
{
    
    static $rules = [
		'nombreplanta' => 'required',
		'direccionplanta' => 'required',
		'distanciaplanta' => 'required',
		'telefonoplanta' => 'required',
		'estadoplanta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreplanta','direccionplanta','distanciaplanta','telefonoplanta','estadoplanta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'idplantas', 'id');
    }
    

}
