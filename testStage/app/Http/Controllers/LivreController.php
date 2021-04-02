<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Livre;
use DB;
use Session;

class LivreController extends Controller
{
    //

    public static function getAll()
    {
        $livre = Livre::all();
        return $livre;
    }

    public static function getLivre($id)
    {
        $livre = Livre::find($id);
        return $livre;
    }


    public function creerLivre(Request $request)
    {
        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->annee = $request->annee;
        $livre->id_disque = $request->disque;


        $image = $request->file('photo');
        $extention = $image->getClientOriginalName();
        $filename = pathinfo($extention, PATHINFO_FILENAME);
        $ext = $image->getClientOriginalExtension();
        $filesaver = $filename.'_'.time().'.'.$ext;
        $path = $image->move('img/livres/',$filesaver);

        $livre->image = $filesaver;


        $livre->save();
        Session::put('livre_success', "Le livre a été inséré avec succès");
        return redirect()->back();
    }


    public function detailLivre($id)
    {

        $livreD = DB::table('livre')
                            ->join('dique', 'disque.id', '=', 'livre.id_disque')
                            ->select('*')
                            ->where('livre.id', $id)->get();
        
        return $livreD;
    }


    public function modifierLivre(Request $request, $id)
    {
        $livre = Livre::find($id);
        $livre->titre = $request->titre;
        $livre->annee = $request->annee;
        $livre->id_disque = $request->disque;

        $livre->update();
        Session::put('livre_success', "Le livre a été modifié avec succès");
        return redirect()->back();
    }


    public function supprimerLivre($id)
    {
        $livre = Livre::find($id);

        $livre->delete();
        return redirect()->back();
    }
}
