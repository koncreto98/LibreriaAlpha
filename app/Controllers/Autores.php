<?php

namespace App\Controllers;

class Autores extends BaseController
{
    public function index()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Autores/index')
            . view('Admin/Layout/footer');
    }

    public function formularioRegistro()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Autores/formulario')
            . view('Admin/Layout/footer');
    }

    public function formularioEditar()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Autores/editar')
            . view('Admin/Layout/footer');
    }

}