<?php

namespace App\Controllers;

class Editoriales extends BaseController
{
    public function index()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Editoriales/index')
            . view('Admin/Layout/footer');
    }

    public function formularioRegistro()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Editoriales/formulario')
            . view('Admin/Layout/footer');
    }

    public function formularioEditar()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Editoriales/editar')
            . view('Admin/Layout/footer');
    }

}