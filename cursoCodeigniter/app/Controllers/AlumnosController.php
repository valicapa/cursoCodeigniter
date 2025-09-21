<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\AlumnosModel;

class AlumnosController extends BaseController
{
    public function formulario()
    {
        return view('alumnos/formAlumno');
    }

    public function guardarAlumno()
    {
        $nombre = $this->request->getPost('nombre');
        $edad = $this->request->getPost('edad');
         $data = [
            'nombre' => $nombre,
            'edad' => $edad
        ];
        // Instancia el modelo
        $modelo = new AlumnosModel();

        // Inserta los datos en la base de datos
        $modelo->insert($data);

        return redirect()->to('/formulario')->with('success', 'Alumno registrado exitosamente');
    }
}
