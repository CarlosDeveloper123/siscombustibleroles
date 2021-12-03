<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conductore
 *
 * @property $id
 * @property $nombreconductor
 * @property $apellidoconductor
 * @property $dniconductor
 * @property $licenciaconductor
 * @property $categoriaconductor
 * @property $telefonoconductor
 * @property $direccionconductor
 * @property $emailconductor
 * @property $estadoconductor
 * @property $created_at
 * @property $updated_at
 *
 * @property Valescombustible[] $valescombustibles
 * @property Viaje[] $viajes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Conductore extends Model
{
    
    static $rules = [
		'nombreconductor' => 'required',
		'apellidoconductor' => 'required',
		'dniconductor' => 'required',
		'licenciaconductor' => 'required',
		'categoriaconductor' => 'required',
		'telefonoconductor' => 'required',
		'direccionconductor' => 'required',
		'emailconductor' => 'required',
		'estadoconductor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreconductor','apellidoconductor','dniconductor','licenciaconductor','categoriaconductor','telefonoconductor','direccionconductor','emailconductor','estadoconductor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valescombustibles()
    {
        return $this->hasMany('App\Models\Valescombustible', 'idconductores', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function viajes()
    {
        return $this->hasMany('App\Models\Viaje', 'idconductores', 'id');
    }
    

}
