<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        
    </div>
    <div class="header-right">
        
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        
                        <img src="{{ asset('/img/moi.png') }}" alt="">
                    </span>

                        <span id="user-name" class="user-name">Blé Esolin</span>
                        
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="https://github.com/anderson225/gestion_disque.git"><i class="dw dw-logout"></i> Depôt git</a>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{URL::to('/')}}">
           Test de stage
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">


                <ul id="accordion-menu">
                    <li>
                        <a href="{{URL::to('/')}}" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-house-1"></span><span class="mtext">Tableau de bord</span>
                        </a>
                        
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-edit2"></span><span class="mtext">Catégorie</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{URL::to('/categorie')}}">Ajouter une categorie</a></li>
                            <li><a href="{{URL::to('/liste_categorie')}}">Liste des categories</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-floppy-disk"></span><span class="mtext">Disque</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{URL::to('/disque')}}">Ajouter un disque</a></li>
                            <li><a href="{{URL::to('/liste_disque')}}">Liste des disques</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-book"></span><span class="mtext">Livre</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{URL::to('/livre')}}">Ajouter un livre</a></li>
                            <li><a href="{{URL::to('/liste_livre')}}">Liste des livres</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-help"></span><span class="mtext">Réalisateur</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{URL::to('/realisateur')}}">Ajouter un réalisateur</a></li>
                            <li><a href="{{URL::to('/liste_realisateur')}}">Liste des réalisateurs</a></li>
                        </ul>
                    </li>
                    
                    
                    
                
                    
                </ul>

                
            
        </div>
    </div>
</div>

