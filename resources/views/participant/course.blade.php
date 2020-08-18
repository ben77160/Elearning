@extends('layouts.app')

@section('content')

<section class="latest-blog container-fluid px-5 spad">
    <h2 class="text-center my-3">Nom de la section</h2>
    <div class="row">
        <div class="col-md-8">
            <iframe width="950" height="650"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div>
        <div class="col-md-4">
            <ul class="list-group list-group-flush mt-5 pt-2">
                <li class="list-group-item bg-light">
                    <a href="#" class="btn">
                        <i class="fas fa-book"></i>
                        Chapitre 1 : Nom de la section
                    </a>
                </li>
                <li class="list-group-item bg-light">
                    <a href="#" class="btn">
                        <i class="fas fa-book"></i>
                        Chapitre 2 : Nom de la section
                    </a>
                </li>
                <li class="list-group-item bg-light">
                    <a href="#" class="btn">
                        <i class="fas fa-book"></i>
                        Chapitre 3 : Nom de la section
                    </a>
                </li>
                <li class="list-group-item bg-light">
                    <a href="#" class="btn">
                        <i class="fas fa-book"></i>
                        Chapitre 4 : Nom de la section
                    </a>
                </li>
                <li class="list-group-item bg-light">
                    <a href="#" class="btn">
                        <i class="fas fa-book"></i>
                        Chapitre 5 : Nom de la section
                    </a>
                </li>
              </ul>
        </div>
    </div>
</section>

@stop