<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnosModel extends Model
{
    protected $table = 'alumno';

    // Clave primaria de la tabla
    protected $primaryKey = 'id';

    // Campos que se pueden rellenar masivamente
    protected $allowedFields = ['nombre', 'edad'];
}
