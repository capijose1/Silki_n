<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ListaController extends Controller
{
    public function index(){
        $categorias=DB::select("select * from categoria");
        $descuentos=DB::select("select * from descuento");
        $autores=DB::select("select * from autor");
        return view('lista',['categorias' => $categorias,'descuentos' => $descuentos,'autores' => $autores]);
    }
}
