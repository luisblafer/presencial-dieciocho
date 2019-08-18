<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $preguntas = [
            0 => [
                'pregunta' => '¿Como se registra?',
                'respuesta' => 'Se registra así'
            ],
            1 => [
                'pregunta' => '¿Como se mata a alguien?',
                'respuesta' => 'Con un garrote'
            ],
        ];
        return view('faq', compact('preguntas'));
    }
}
