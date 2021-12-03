<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grifo
 *
 * @property $id
 * @property $razongrifo
 * @property $rucgrifo
 * @property $direcciongrifo
 * @property $telefonogrifo
 * @property $estadogrifo
 * @property $created_at
 * @property $updated_at
 *
 * @property Valescombustible[] $valescombustibles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grifo extends Model
{
    
    static $rules = [
		'razongrifo' => 'required',
		'rucgrifo' => 'required',
		'direcciongrifo' => 'required',
		'telefonogrifo' => 'required',
		'estadogrifo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razongrifo','rucgrifo','direcciongrifo','telefonogrifo','estadogrifo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valescombustibles()
    {
        return $this->hasMany('App\Models\Valescombustible', 'idgrifos', 'id');
    }
    

}
