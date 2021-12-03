<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipocombustible
 *
 * @property $id
 * @property $nombretipocombustible
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo[] $vehiculos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipocombustible extends Model
{
    
    static $rules = [
		'nombretipocombustible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombretipocombustible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiculos()
    {
        return $this->hasMany('App\Models\Vehiculo', 'idtipocombustibles', 'id');
    }
    

}
