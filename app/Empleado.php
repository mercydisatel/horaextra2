<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombreEmpleado', 
        'idDepartamento',
    ];

    public $timestamps = false;
    protected $primaryKey = 'idEmpleado';
}
