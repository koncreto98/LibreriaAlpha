<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Tema_model;

class Temas extends BaseController
{
    public function index()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Temas/index')
            . view('Admin/Layout/footer');
    }

    public function formularioRegistro()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Temas/formulario')
            . view('Admin/Layout/footer');
    }

    public function formularioEditar()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Temas/editar')
            . view('Admin/Layout/footer');
    }

    public function registrarTema()
    {
        
        $data = [
            'codigo' => $this->request->getPost('codigo'),
            'tema'   => $this->request->getPost('tema'),
            'imagen' => $this->request->getPost('imagen'),
        ];

        echo json_encode($data);
        /* var_dump($data);
        die(); */

    }

    public function tema_add()
    {

        helper(['form', 'url']);
        $this->Tema_model = new Tema_model();

        $data = array(
            'codigo' => $this->request->getPost('codigo'),
            'tema' => $this->request->getPost('tema'),
            'imagen' => $this->request->getPost('imagen'),
        );
        $insert = $this->Tema_model->book_add($data);
        echo json_encode(array("status" => TRUE));
    }
}