<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Valescombustible
 *
 * @property $id
 * @property $numerovale
 * @property $idvehiculos
 * @property $idconductores
 * @property $idgrifos
 * @property $fecha
 * @property $kilometraje
 * @property $galonaje
 * @property $precio
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore $conductore
 * @property Grifo $grifo
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Valescombustible extends Model
{
    
    static $rules = [
		'numerovale' => 'required',
		'idvehiculos' => 'required',
		'idconductores' => 'required',
		'idgrifos' => 'required',
		'fecha' => 'required',
		'kilometraje' => 'required',
		'galonaje' => 'required',
		'precio' => 'required',
		'total',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numerovale','idvehiculos','idconductores','idgrifos','fecha','kilometraje','galonaje','precio','total'];


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
    public function grifo()
    {
        return $this->hasOne('App\Models\Grifo', 'id', 'idgrifos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'idvehiculos');
    }
    

}
