<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctores';
    protected $primaryKey = 'doctores_id';
    protected $fillable = ['nombre', 'apellido', 'especialidad'];
    public $timestamps = false;
}
