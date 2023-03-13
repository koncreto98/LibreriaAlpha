<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Layout/header')
            . view('index')
            . view('Layout/footer');
    }

    public function signUp()
    {
        return view('Layout/header')
            . view('sign-up')
            . view('Layout/footer');
    }

    public function resetPasword()
    {
        return view('Layout/header')
            . view('reset-password')
            . view('Layout/footer');
    }

    public function enviarEmail()
    {
        $correo = $this->request->getVar('email');

        $email = \Config\Services::email();

        $email->setFrom('prueba@example.com', 'Your Name');
        $email->setTo($correo);

        $email->setSubject('Email Test');
        $email->setMessage('Bienvenido a Libreria Alpha');

        $email->send();
    }
}