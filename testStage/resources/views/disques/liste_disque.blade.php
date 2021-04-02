@extends('layouts.app')

@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Disques</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Disques</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <div id="form-message-success" class="mb-4">
                       
                      
                    </div>
                    <h4 class="text-blue h4">Liste des disques</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Id</th>
                                <th>Titre</th>
                                <th>Annee</th>
                                <th>Image</th>
                                
                                
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disques as $disque)

                                <tr>
                                

                                    <td class="table-plus">{{$disque->id}}</td>
                                    <td>{{$disque->titre}}</td>
                                    <td>{{$disque->annee}}</td>
                                    <td>
                                        

                                        <span class="user-icon">
                        
                                            <img id="avatar" src="{{asset('img/disques/'.$disque->image)}}" alt="">
                                        </span>
                                    </td>
                                    
                                    
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="{{URL::to("/modifier_disque/$disque->id")}}"><i class="dw dw-edit2"></i> Modifier</a>
                                                <a class="dropdown-item" href="{{URL::to("/supprimer_disque/$disque->id")}}"><i class="dw dw-edit2"></i> Supprimer</a>
                
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            <!-- Export Datatable End -->
        </div>
       
    </div>
</div>
@endsection
<style>
    #avatar {
  vertical-align: middle;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
</style>