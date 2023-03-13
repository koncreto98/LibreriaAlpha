<?php

namespace App\Controllers;

class Libros extends BaseController
{
    public function index()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Libros/index')
            . view('Admin/Layout/footer');
    }

    public function formularioRegistro()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Libros/formulario')
            . view('Admin/Layout/footer');
    }

    public function formularioEditar()
    {
        return view('Admin/Layout/header')
            . view('Admin/Layout/menu')
            . view('Admin/Libros/editar')
            . view('Admin/Layout/footer');
    }

}