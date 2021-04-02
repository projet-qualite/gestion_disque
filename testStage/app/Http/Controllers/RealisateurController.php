<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Realisateur;
use Session;

class RealisateurController extends Controller
{
    //

    public static function getAll()
    {
        $realisateur = Realisateur::all();
        return $realisateur;
    }


    public static function getRealisateur($id)
    {
        $realisateur = Realisateur::find($id);
        return $realisateur;
    }


    public function creerRealisateur(Request $request)
    {
        $realisateur = new Realisateur();
        $realisateur->nom = $request->nom;
        $realisateur->prenom = $request->prenom;


        $image = $request->file('photo');
        $extention = $image->getClientOriginalName();
        $filename = pathinfo($extention, PATHINFO_FILENAME);
        $ext = $image->getClientOriginalExtension();
        $filesaver = $filename.'_'.time().'.'.$ext;
        $path = $image->move('img/realisateurs/',$filesaver);

        $realisateur->photo = $filesaver;


        $realisateur->save();

        Session::put('realisateur_success', 'Le realisateur a été ajouté avec succès');
        return redirect()->back();
    }


    public function modifierRealisateur(Request $request, $id)
    {
        $realisateur = Realisateur::find($id);
        $realisateur->nom = $request->nom;
        $realisateur->prenom = $request->prenom;

        $realisateur->update();
        Session::put('realisateur_success', 'Le realisateur a été modifié avec succès');
        return redirect()->back();
    }


    public function supprimerRealisateur($id)
    {
        $realisateur = Realisateur::find($id);

        $realisateur->delete();
        return redirect()->back();
    }

}
