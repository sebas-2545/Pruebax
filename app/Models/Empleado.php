<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'ds_empleado';

    protected $fillable = [
        'nombre',
        'apellido',
        'id_departamento',
        'salario',
        'id_niveleducacion',
    ];

    /**
     * Relación con el modelo Departamento.
     */
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    /**
     * Relación con el modelo NivelEducacion.
     */
    public function nivelEducacion()
    {
        return $this->belongsTo(NivelEducacion::class, 'id_niveleducacion');
    }
}
