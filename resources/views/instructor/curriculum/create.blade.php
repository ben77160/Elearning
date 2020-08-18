@extends('layouts.instructor-app')

@section('content')

<section class="contact-from-section spad">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-10 pl-5 ml-5">
                <h3 class="text-center mb-5">Programme</h3>
                <form id="form" action="#" method="POST" enctype="multipart/form-data">
                    <div id="form-element" class="form-group">
                        <div class="jumbotron py-3">
                            <h4 class="my-3">Contenu de la section :</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" type="text" id="section_name" name="section_name" placeholder="Nom du chapitre"/>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" id="section_video" name="section_video"/>
                                </div>
                            </div>
                            <div class="text-center my-3 pt-3">
                                <button type="submit" class="btn btn-info">Enregistrer cette section</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@stop