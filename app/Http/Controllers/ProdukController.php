<?php
namespace app\Http\Controllers;
use Illuminate\Http\Request;
class  konten extends Controller {
    public function index (){
        $nama = "Erlando";
        return view('welcome', compact('nama'));
    }
    public function konten (){
        $nama = "Erlando";
        return view('konten', compact('nama'));
    }
}