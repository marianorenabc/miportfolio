<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PoliticasController extends Controller
{
    public function avisoLegal()
    {
        return Inertia::render('Public/Politicas/AvisoLegal');
    }

    public function privacidad()
    {
        return Inertia::render('Public/Politicas/Privacidad');
    }

    public function cookies()
    {
        return Inertia::render('Public/Politicas/Cookies');
    }
}