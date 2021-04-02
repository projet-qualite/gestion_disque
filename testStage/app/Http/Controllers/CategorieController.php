<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;
use Session;

class CategorieController extends Controller
{
    //


    public static function getAll()
    {
        $categories = Categorie::all();
        return $categories;
    }

    public static function getCategorie($id)
    {
        $categorie = Categorie::find($id);
        return $categorie;
    }


    public function creerCategorie(Request $request)
    {
        $categorie = new Categorie();
        $categorie->nom = $request->nom;

        $categorie->save();
        Session::put('categorie_success', "La catégorie a été insérée avec succès");
        return redirect()->back();
    }


    public function modifierCategorie(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $categorie->nom = $request->nom;

        $categorie->update();
        Session::put('categorie_success', "La catégorie a été modifiée avec succès");
        return redirect()->back();
    }


    public function supprimerCategorie($id)
    {
        $categorie = Categorie::find($id);

        $categorie->delete();
        return redirect()->back();
    }


    
    
}
