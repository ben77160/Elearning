@extends('layouts.app')

@section('content')

<section class="latest-blog spad">
    <div class="container">
        <h2 class="text-center">Mes cours</h2>
        <div class="jumbotron row">
            <div class="courses">
                    <div class="course my-5 row">
                        <div class="col-lg-3">
                            <div class="about-pic">
                                <a href="#">
                                    <img src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg" alt="Course img">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-text pt-0">
                                <h3>Titre du cours</h3>
                                <p>Sous-titre du cours</p>
                                <p>Par <b>Nom du formateur</b></p>
                                <span class="tag">Catégorie</span>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="primary-btn">
                                Continuer
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <hr>
            </div>
        </div>
    </div>
</section>

@stop