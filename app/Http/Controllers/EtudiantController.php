<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    public function liste_etudiants_page()
    {
        //ça veut dire raha ao am java hoe "select * from 'nom_table' "
        /*Eto hanao pagination tsika asina hoe "::paginate(4)" dia tenenina hoe firy ligne de 
tableau ny ampoitra eto, par exemple hoe 4 lignes de tableau par page. */

        $etud = Etudiant::paginate(4);

        /* Ao am'le view (= no asina ny affichage) ao misy dossier etudiant dia ao antin'io le 
        fanaovana affichage liste des etudiants -> "liste.blade.php" */

        //Donc la tsika ampiseo ny donnée avy am base noire grace an'i varibale " $etud " izay mitondran'le "select * from 'nom_table'" 
        return view('etudiant.liste', compact('etud'));
    }

    public function ajout_etudiant_page()
    {
        return view('etudiant.ajouter');
    }

    public function ajout_etudiant( Request $request)
    {
        $request -> validate([
            'anarana' => 'required',
            'fanapiny' => 'required',
            'daty' => 'required',
            'price' => 'required',
            'classy' => 'required',
        ]);
    
        //Manao instanciation du class Etudiant
        $etu = new Etudiant();
        $etu -> nom = $request -> anarana;
        $etu -> prenom = $request -> fanapiny;
        $etu -> dtn = $request -> daty;
        $etu -> prix = $request -> price;
        $etu -> classe = $request -> classy;

        $etu -> save();

        return redirect('/page_ajout_etudiant') -> with('vita', 'L\'Etudiant a bien été ajouter');
        
    }

    /* url -> "/modifer_etudiant", dia io mampisan'le fonction : "upadate_etudiant",  dia rehefa ampesaina 
    io url io dia mande le fonction c'est grace au fonction mampadefan'le view où c'est dedans no misy 
    ny code mampisy affichage donc lasa mipoitra la affichage manja be  */

    public function update_etudiant_page($id)
    {
        //ito manao selection d'une colomne grace son id
         $mipanatra = Etudiant::find($id);
        return view('etudiant.update', compact('mipanatra'));
    }

    public function update_etudiant(Request $request)
    {
        $request -> validate([
            'anarana' => 'required',
            'fanapiny' => 'required',
            'daty' => 'required',
            'price' => 'required',
            'classy' => 'required',
        ]);

        //Dia ito zany ny manao modification an'ilay colomne vo selectionné teo
        /* Raha java io dia miteny hoe "select * from table 'nom_table' where id='?'" dia 
        après atao ny modification */
        $etudiants = Etudiant::find($request->id);
        $etudiants -> nom = $request -> anarana;
        $etudiants -> prenom = $request -> fanapiny;
        $etudiants -> dtn = $request -> daty;
        $etudiants -> prix = $request -> price;
        $etudiants -> classe = $request -> classy;

        $etudiants -> update();

        return redirect('/page_etudiant_liste') -> with('okey', 'L\'Etudiant a bien été Modifier');
        
    }

    public function supp_etudiant_page($id){
           $suppEtudiant = Etudiant::find($id);
           $suppEtudiant->delete();

           return redirect('/page_etudiant_liste') -> with('okey', 'L\'Etudiant a bien été Supprimer');
        
    }
}
