<?php
namespace App\Controllers;
class Dashboard extends BaseController
{
    public function index()
    {
        $header['title']='Dashboard';
        echo view('partials/header',$header);
        echo view('partials/top-menu');
        echo view('partials/side-menu');
        echo view('dashboard');
        echo view('partials/footer');
    }
}