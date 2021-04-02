@extends('layouts.app')

@section('content')


<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Disque</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Disque</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Ajouter un disque</h4>
                    </div>

                    
                    
                </div>
                <div id="form-message-success" class="mb-4">
                    @if (Session::has('disque_success'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('disque_success')}}
                      {{Session::put('disque_success', null)}}
                  </div>
                    @endif
                  
                </div>
                <form action="{{url('/creerDisque')}}" method="POST" enctype="multipart/form-data" id="contactForm" name="contactForm" class="contactForm">
                    {{ csrf_field() }}
                    
                    <div class="row">

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Id</label>
                                <input type="text"  disabled name="id" value="{{$nextId}}" class="form-control">
                            </div>
                        </div>

                        

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Titre</label>
                                <input type="text"  required name="titre" value="" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Annee</label>
                                <input type="number" min="1800" max="2021"  required name="annee" value="" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Categorie</label>
                                <select name="categorie" required class="form-control">
                                        @foreach ($categories as $categorie)

                                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                        
                                        @endforeach

                                    
                                    
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Réalisateur</label>
                                <select name="realisateur" required class="form-control">
                                        @foreach ($realisateurs as $realisateur)

                                            <option value="{{$realisateur->id}}">{{$realisateur->nom}} {{  $realisateur->prenom }}</option>
                                        
                                        @endforeach

                                    
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file"  required name="photo" class="form-control-file form-control height-auto">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="submit" value="Sauvegarder" class="btn btn-primary">
                            </div>
                        </div>

                        
                        
                    </div>

                    
                    

                   
                   
                    
                </form>
                
            </div>

@endsection