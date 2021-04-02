@extends('layouts.app')

@section('content')

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="backend/vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Bonjour
                            <span></span>
                        <div class="weight-600 font-30 text-blue">

                            
                            
                        </div>
                    </h4>
                    <p class="font-18 max-width-600">Je vous souhaite la bienvenue.</p>
                </div>
            </div>
        </div>

        

            <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">{{$nb_categorie}}</div>
                                <div class="weight-600 font-20">Catégorie(s)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">{{$nb_disque}}</div>
                                <div class="weight-600 font-20">Disque(s)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">{{$nb_livre}}</div>
                                <div class="weight-600 font-20">Livre(s)</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            
                            <div class="widget-data">
                                <div class="h4 mb-0">{{$nb_realisateur}}</div>
                                <div class="weight-600 font-20">Réalisateur(s)</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        
        
        
       
    </div>
</div>
    
@endsection