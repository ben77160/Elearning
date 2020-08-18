<header class="header-section">
    <div class="container-fluid">
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active">
                        <a href="#">
                            <i class="fas fa-home"></i>
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-chalkboard-teacher"></i>
                            Participant
                        </a>
                        <ul class="dropdown">
                            <li><p class="px-2">Passez à la vue Participant ici : revenez aux cours que vous suivez.</p></li>
                        </ul>
                    </li>
                    <li>
                    <li>
                        <a class="nav-link" href="#">
                        <img class="w-25 border-rounded rounded-circle" src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg"/>
                         </a>
                             <ul class="dropdown">
                                 <li>
                                     <div class="d-flex justify-content-between py-3 px-3">
                                         <div class="user-infos">
                                             <p>Utilisateur</p>
                                             <small>utilisateur@email.com</small>
                                         </div>
                                     </div>
                                 </li>
                                 <div class="dropdown-divider"></div>
                                 <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                             </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>
