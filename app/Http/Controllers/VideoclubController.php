<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoclubController extends Controller
{
    //
    public function index(){
        return 'listar todas las peliculas'; 
    }
    public function create(){
        return 'Se ha creado un usuario con exito'; 
    }
    public function Update(){
        return 'ha actualizado un cliente'; 
    }
    public function destroy(){
        return 'Ha eliminado un usuario'; 
    }
}