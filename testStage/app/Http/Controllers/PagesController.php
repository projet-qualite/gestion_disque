<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\RealisateurController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\DisqueController;
use App\Http\Controllers\CategorieController;

use Session;

class PagesController extends Controller
{
    //

    // Cette methode sert à afficher la page d'accueil
    // Elle calcule le nombre de livres, de disques, de catégories et de réalisateurs présents dans la base de données
    public function index() //
    {

        // On calcule le nombre de chacun des éléments
        $nb_disque = count(DisqueController::getAll());
        $nb_livre = count(LivreController::getAll());
        $nb_categorie = count(CategorieController::getAll());
        $nb_realisateur = count(RealisateurController::getAll());



        //On les envoie dans la vue
        return view('welcome')->with('nb_disque', $nb_disque)->with('nb_livre', $nb_livre)->with('nb_realisateur', $nb_realisateur)->with('nb_categorie', $nb_categorie);
    }


    public function categorie()
    {


        $nb = count(CategorieController::getAll());
        if($nb == 0)
        {
            $last = 1;
        }
        else{
            $last = CategorieController::getAll()[$nb-1]->id+1;
        }
        

        return view('categories.categorie')->with('nextId', $last);
    }


    public function modifier_categorie($id)
    {
        $categorie = CategorieController::getCategorie($id);

        
        return view('categories.modifier_categorie')->with('categorie', $categorie);
    }

    public function list_categorie()
    {
        $categories = CategorieController::getAll();

        return view('categories.liste_categorie')->with('categories', $categories);
    }




    

    //Réalisateur

    public function realisateur()
    {
        $nb = count(RealisateurController::getAll());
        if($nb == 0)
        {
            $last = 1;
        }
        else{
            $last = RealisateurController::getAll()[$nb-1]->id+1;
        }

        
        return view('realisateurs.realisateur')->with('nextId', $last);
    }


    public function modifier_realisateur($id)
    {
        $realisateur = RealisateurController::getRealisateur($id);

        
        return view('realisateurs.modifier_realisateur')->with('realisateur', $realisateur);
    }

    public function liste_realisateur()
    {
        $realisateurs = RealisateurController::getAll();

        return view('realisateurs.liste_realisateur')->with('realisateurs', $realisateurs);
    }




    // Disque

    public function disque()
    {
        $nb = count(DisqueController::getAll());
        if($nb == 0)
        {
            $last = 1;
        }
        else{
            $last = DisqueController::getAll()[$nb-1]->id+1;
        }


        $categories = CategorieController::getAll();
        $realisateurs = RealisateurController::getAll();

        
        return view('disques.disque')->with('nextId', $last)->with('categories', $categories)->with('realisateurs', $realisateurs);
    }


    public function modifier_disque($id)
    {
        $disque = DisqueController::getDisque($id);
        $categories = CategorieController::getAll();
        $realisateurs = RealisateurController::getAll();

        
        return view('disques.modifier_disque')->with('disque', $disque)->with('categories', $categories)->with('realisateurs', $realisateurs);;
    }

    public function liste_disque()
    {
        $disques = DisqueController::getAll();
        

        return view('disques.liste_disque')->with('disques', $disques);
    }



    // Livre

    public function livre()
    {
        $nb = count(LivreController::getAll());
        if($nb == 0)
        {
            $last = 1;
        }
        else{
            $last = LivreController::getAll()[$nb-1]->id+1;
        }


        $disques = DisqueController::getAll();

        
        return view('livres.livre')->with('nextId', $last)->with('disques', $disques);
    }


    public function modifier_livre($id)
    {
        $livre = LivreController::getLivre($id);
        $disques = DisqueController::getAll();

        
        return view('livres.modifier_livre')->with('livre', $livre)->with('disques', $disques);
    }

    public function liste_livre()
    {
        $livres = LivreController::getAll();
        

        return view('livres.liste_livre')->with('livres', $livres);
    }




}
