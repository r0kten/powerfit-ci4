<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return
            view('partials/header')
          . view('partials/hero')
          . view('partials/about')
          . view('partials/trainers')
          . view('partials/membership')
          . view('partials/contact')
          . view('partials/footer');
    }
}
