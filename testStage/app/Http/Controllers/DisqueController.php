<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disque;
use DB;
use Session;

class DisqueController extends Controller
{
    //

    public static function getAll()
    {
        $disque = Disque::all();
        return $disque;
    }

    public static function getDisque($id)
    {
        $disque = Disque::find($id);
        return $disque;
    }


    public function creerDisque(Request $request)
    {
        $disque = new Disque();
        $disque->titre = $request->titre;
        $disque->annee = $request->annee;
        $disque->id_categorie = $request->categorie;
        $disque->id_realisateur = $request->realisateur;


        $image = $request->file('photo');
        $extention = $image->getClientOriginalName();
        $filename = pathinfo($extention, PATHINFO_FILENAME);
        $ext = $image->getClientOriginalExtension();
        $filesaver = $filename.'_'.time().'.'.$ext;
        $path = $image->move('img/disques/',$filesaver);

        $disque->image = $filesaver;


        $disque->save();
        Session::put('disque_success', "Le disque a été inséré avec succès");
        return redirect()->back();
    }


    public function detailDisque($id)
    {

        $disque = DB::table('Disque')
                            ->join('dique', 'disque.id', '=', 'Disque.id_disque')
                            ->select('*')
                            ->where('Disque.id', $id)->get();
        
        return $disque;
    }


    public function modifierDisque(Request $request, $id)
    {
        $disque = Disque::find($id);
        $disque->titre = $request->titre;
        $disque->annee = $request->annee;
        $disque->id_categorie = $request->categorie;
        $disque->id_realisateur = $request->realisateur;

        $disque->update();
        Session::put('disque_success', "Le disque a été modifié avec succès");
        return redirect()->back();
    }


    public function supprimerDisque($id)
    {
        $disque = Disque::find($id);

        $disque->delete();
        return redirect()->back();
    }

    
}
