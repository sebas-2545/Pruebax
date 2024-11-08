<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelEducacion extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'ds_niveleducacion';

    protected $fillable = [
        'descripcion',
    ];

    /**
     * Relación con el modelo Empleado.
     */
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_niveleducacion');
    }
}
