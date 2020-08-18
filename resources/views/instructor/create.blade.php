@extends('layouts.app')

@section('content')

<section class="contact-from-section spad">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-8">
                <form action="#" class="comment-form contact-form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="title">Titre du cours</label>
                            <input type="text" placeholder="Le titre de votre cours" name="title">
                        </div>
                        <div class="col-lg-12">
                            <label for="subtitle">Sous-titre du cours</label>
                            <input type="text" placeholder="Le sous-titre de votre cours" name="subtitle">
                        </div>
                        <div class="col-lg-12">
                            <label for="description">Description du cours</label>
                            <textarea type="textarea" placeholder="Qu'allez vous enseigner durant ce cours ? Avec quelles compétences les apprenants repartiront ?" name="description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <select class="form-control" name="category">
                                <option value="cat">Catégorie</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <label for="image">Image du cours</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="file" name="image"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="primary-btn">
                                <i class="fas fa-save"></i>
                                Sauvegarder
                            </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection