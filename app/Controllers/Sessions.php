<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sessions extends BaseController
{
    protected $request, $session;

    public function __construct()
    {
        $this->request = \Config\Services::request();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if ($this->session->get('iduser')) {
            return redirect()->to('pages/home');
        }

        return view('sessions/index');
    }

    public function create()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email == 'alpha@gmail.com' && $password == '123') {
            $this->session->set('iduser', 1);
            return redirect()->to('pages/home');
        } else {
            if (!$this->session->get('iduser')) {
                $this->session->setFlashdata('danger', 'Username dan Password yang anda masukkan salah');
                return redirect()->to('/');
            }
        }
    }

    public function logout()
    {
        $this->session->remove('iduser');
        return redirect()->to('/');
    }
}
