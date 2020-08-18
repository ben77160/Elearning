@extends('layouts.instructor-app')

@section('content')

 <section class="schedule-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Programme</h2>
                    <p>Titre du cours</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-tab">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="text-center mb-5">
                                <a class="primary-btn" href="#">
                                    <i class="fas fa-plus mr-2"></i>
                                    Ajouter une section
                                </a>
                            </div>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4 px3 py-3">
                                                <iframe width="320" height="180"
                                                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>
                                            </div>
                                            <div class="col-lg-4 text-left">
                                                <div class="sc-text">
                                                    <h4>Nom de la section</h4>
                                                </div>
                                                <p>Durée de la section : 00.50</p>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="sc-text d-flex justify-content-around">
                                                    <a class="btn btn-danger" href="#">
                                                        <i class="fas fa-trash"></i>
                                                        Supprimer
                                                    </a>
                                                    <a class="btn btn-warning" href="#">
                                                        <i class="fas fa-edit"></i>
                                                        Modifier
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
