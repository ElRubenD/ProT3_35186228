<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='CarpiPOP';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo']='Quienes Somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo']='Acerca de CarpiPOP';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function tienda()
    {
        $data['titulo']='Tienda';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/tienda');
        echo view('front/footer_view');
    }

    public function show()
    {
        $data['titulo']='Tienda';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/show');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}
