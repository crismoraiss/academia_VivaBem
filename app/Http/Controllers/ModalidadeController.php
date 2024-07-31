<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('site.modalidade.musculacao');
    }

    public function treinofuncional(){
        return view('site.modalidade.treinofuncional');
    }

    public function meditacao(){
        return view('site.modalidade.meditacao');
    }

    public function boxe(){
        return view('site.modalidade.boxe');
    }

    public function yoga(){
        return view('site.modalidade.yoga');
    }

}
