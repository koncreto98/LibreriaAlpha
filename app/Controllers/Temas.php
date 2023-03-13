<?php

namespace App\Controllers;

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

}