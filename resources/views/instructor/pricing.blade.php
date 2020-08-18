@extends('layouts.instructor-app')

@section('content')

<section class="contact-from-section spad">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-8">
                <h3>Tarification</h3>
                <form action="#" class="comment-form contact-form" method="POST" enctype="multipart/form-data">
                    @csrf 
                    <div class="content">
                        <p>Tarif du cours</p>
                        <p>Choisissez un niveau de tarif pour votre cours ci-dessous et cliquez sur « Enregistrer ». Le prix affiché visible par les participants dans d'autres devises est calculé à l'aide d'une grille tarifaire en fonction du tarif auquel celui-ci correspond.</p>
                        <p>Si vous prévoyez de rendre votre cours gratuit, la longueur totale de son contenu vidéo doit être inférieure à 2 heures.</p>
                    </div>
                    <div class="col-lg-12">
                        <select class="form-control" name="price">
                            <option value="19.99">19,99 €</option>
                            <option value="29.99">29,99 €</option>
                            <option value="39.99">39,99 €</option>
                            <option value="49.99">49,99 €</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-5">
                        <button type="submit" class="primary-btn">
                            <i class="fas fa-save"></i>
                            Sauvegarder
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection