<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'ds_departamento';

    protected $fillable = [
        'nombre_departamento',
        'ciudad_departamento'
    ];

    /**
     * Relación con el modelo Empleado.
     */
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_departamento');
    }
}
