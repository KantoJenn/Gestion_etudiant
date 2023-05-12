<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Illuminate\Facades\DB;

class RechercheController extends Controller
{
    public function rechercher (Request $request)
    {
        //ito "$request->input('query')" dia midika hoe manao recherche an'le input manana anarana hoe "query"
        $searchQuery = $request->input('query');

        $nomEtudiant = Etudiant::where('nom', 'like', "%$searchQuery%")
                        ->orWhere('prenom', 'like', "%searchQuery%")
                        ->paginate(3);

        return view('etudiant.recherche', compact('nomEtudiant'));
    } 

    
}
