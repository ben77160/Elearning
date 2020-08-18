@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <form class="jumbotron row contact_form" action="#" method="POST">
                {{-- Carte de crédit --}}
                <button id="complete-order" type="submit" class="primary-btn my-3">Procéder au paiement</button>
            </form>
            <div class="order-details my-5">
                <h3>Détails de la commande</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><img class="cart-img" src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg" /> </td>
                            <td><p><b>Titre du cours</b></p><p>Par Nom du formateur</p></td>
                            <td class="text-right">19,99 €</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                  Résumé
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p>Prix d'origine:</p>  
                        <p>19,99</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>Taxe:</p>  
                        <p>3,00</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p><b>Prix total:</b></p>  
                        <p><b>22,99</b></p>
                    </div>
                    <small class="card-text">Comme exigé par la loi, Elearning prélève les taxes sur les transactions applicables aux achats réalisés dans certaines juridictions fiscales.
                    En validant votre achat, vous acceptez ces Conditions générales d'utilisation.</small>
                </div>
              </div>
        </div>
    </div>
</div>

@stop 
