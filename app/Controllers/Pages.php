<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/index';
        return view('layout', $data);
    }

    public function Home()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/home';
        return view('layout', $data);
    }

    public function login()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/login';
        return view('layout', $data);
    }
    
    public function stock()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/stock';
        return view('layout', $data);
    }

    public function barangmasuk()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/barangmasuk';
        return view('layout', $data);
    }

    public function barangkeluar()
    {
        if (!$this->session->get('username'))  {
            $this->session->setFlashdata('danger', 'Anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/barangkeluar';
        return view('layout', $data);
    }

    public function logout()
    {
        $data['main_view'] = 'pages/login';
        return view('layout', $data);
    }
}
