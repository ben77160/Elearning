@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="card w-25 mx-5">
        <img src="https://blog.hyperiondev.com/wp-content/uploads/2019/02/Blog-Types-of-Web-Dev.jpg">
        <div class="card-body">
            <div class="action d-flex justify-content-between">
                <p>
                    <i class="fas fa-clock"></i>
                    04/02/2018
                </p>
                <p>Par Nom du formateur</p>
            </div>
            <p class="card-text">Sous-titre du cours</p>
        </div>
        <div class="action d-flex justify-content-around my-3">
            <a href="#" class="primary-btn w-75">
                <i class="fas fa-graduation-cap"></i>
                Commencer
            </a>
        </div>
    </div>
</div>

@stop