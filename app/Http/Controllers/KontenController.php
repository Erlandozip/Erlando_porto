<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class  KontenController extends Controller {
    public function index (){
        return view('welcome');
    }
    public function konten (){
        return view('konten');
    }
}