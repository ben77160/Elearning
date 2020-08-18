@extends('layouts.instructor-app')

@section('content')

<section class="contact-from-section spad">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-lg-10 jumbotron">
                <h3 class="mb-5">Participants</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Inscription</th>
                        <th scope="col">Participant</th>
                        <th scope="col">Cours</th>
                        <th scope="col">Prix payé</th>
                        <th scope="col">Votre revenu</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th>20/03/2020</th>
                          <td>utilisateur@email.com</td>
                          <td>Titre du cours</td>
                          <td>19,99 €</td>
                          <td>13,99 €</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>

@endsection