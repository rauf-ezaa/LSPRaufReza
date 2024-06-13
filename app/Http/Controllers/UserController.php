<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Ekskul;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $dataHome = Home::all();
        return view ('userPage.indexUser',compact('dataHome'));
    }

    public function profilSekolah(){
        return view ('userPage.profilSekolah');
    }

    public function pageEskul(){

        $dataEskul = Ekskul::all();
        return view('userPage.eskul',compact('dataEskul'));
    }
}
