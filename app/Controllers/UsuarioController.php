<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $data['usuarios'] = $usuarioModel->findAll();
        return view('usuarios/index', $data);
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $usuarioModel = new UsuarioModel();
        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $usuarioModel->save($data);
        return redirect()->to('/usuarios');
    }

    public function edit($id)
    {
        $usuarioModel = new UsuarioModel();
        $data['usuario'] = $usuarioModel->find($id);
        return view('usuarios/edit', $data);
    }

    public function update($id)
    {
        $usuarioModel = new UsuarioModel();
        $data = $this->request->getPost();
        if (!empty($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            unset($data['password']);
        }
        
        $usuarioModel->update($id, $data);
        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->delete($id);
        return redirect()->to('/usuarios');
    }
}
