<?php

namespace App\Controllers\Docente;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DocenteController extends BaseController
{
    public function index()
    {
        return view('docente/index');
    }
}
