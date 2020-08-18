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
                <i class="fas fa-ellipsis-v"></i>
                Suivre un cours
            </a>
            <ul class="dropdown px-2 py-3">
                <li>
                    <a href="#">
                    Catégorie
                    </a>
                </li>
            </ul>
        </li>
        <li>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-chalkboard-teacher"></i>
                Formateur
            </a>
            <ul class="dropdown">
                <li><p class="px-2">Passez à la vue Formateur ici : revenez aux cours que vous enseignez.</p></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-book"></i>
                Mes cours
            </a>
            <ul class="dropdown">
                <li>
                    <div class="d-flex  ml-2 my-3">
                        <img class="avatar border-rounded" src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg"/>
                        <div class="user-infos">
                            <a href="#"><small>Titre du cours</small></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
            <ul class="dropdown px-2 py-2">
                <li>
                    <div class="d-flex">
                        <img class="avatar border-rounded" src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg"/>
                        <div class="user-infos ml-3">
                            <small>Titre du cours</small>
                            <p class="text-danger">29,99 €</p>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-heart"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>
            <ul class="dropdown px-2 py-2">
                <li>
                    <div class="d-flex">
                        <img class="avatar border-rounded" src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg"/>
                        <div class="user-infos ml-3">
                            <small>Titre du cours</small>
                            <p class="text-danger">19,99 €</p>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="#">
               <img class="avatar-profile border-rounded rounded-circle" src="https://uploads-ssl.webflow.com/5bddf05642686caf6d17eb58/5dc2fd00c29f7abeadd7c332_gPZwCbdS.jpg"/>
            </a>
            <ul class="dropdown">
                <li>
                    <div class="d-flex justify-content-between py-3 px-3">
                        <div class="user-infos">
                            <p>{{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                            <small>{{ \Illuminate\Support\Facades\Auth::user()->email }}</small>
                        </div>
                    </div>
                </li>
                <div class="dropdown-divider"></div>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
        </li>
    </ul>
</nav>
