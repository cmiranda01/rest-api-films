<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 1);; // número de elementos por página
        $page = $request->input('page', 1); // número de página actual, establecer a 1 por defecto si no se especifica
        
        $films = Film::paginate($perPage, ['*'], 'page', $page);
        
        return response()->json($films, 200);
    }
    

    public function show($id)
    {
        $film = Film::with('FilmImage')->find($id);
        if (!$film) {
            return response()->json(['message' => 'Film not found'], 404);
        }
        return response()->json($film, 200);
    }

}