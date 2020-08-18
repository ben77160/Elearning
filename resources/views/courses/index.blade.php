@extends('layouts.app')

@section('content')

 <section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Cours pour commencer</h2>
                    <p class="f-para">There are several ways people can make money online. From selling products to advertising. In this article I am going to explain the concept of contextual advertising.</p>
                </div>
            </div>
        </div>
        @include('incs.courses.category-banner')
        <div class="row">
            <div class="courses">
                <div class="course my-5 row">
                    <div class="col-lg-4">
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
                    <div class="col-lg-2">
                        <b>19,99 €</b>
                    </div>
                </div>
                <div class="course my-5 row">
                    <div class="col-lg-4">
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
                    <div class="col-lg-2">
                        <b>19,99 €</b>
                    </div>
                </div>
                <div class="course my-5 row">
                    <div class="col-lg-4">
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
                    <div class="col-lg-2">
                        <b>19,99 €</b>
                    </div>
                </div>
                <div class="course my-5 row">
                    <div class="col-lg-4">
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
                    <div class="col-lg-2">
                        <b>19,99 €</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection