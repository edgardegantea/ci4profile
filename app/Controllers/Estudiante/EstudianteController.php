<?php

namespace App\Controllers\Estudiante;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EstudianteController extends BaseController
{
    public function index()
    {
        return view('estudiante/index');
    }
}
