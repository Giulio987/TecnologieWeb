@extends('layouts.app')

@section('content')

<div class="container mt-5 ">
    <div class="row card-check my-3">
        <div class="col-md-3 my-3">
            <div class="card h-100 border-card">
                <img src="images/pexels-jess-bailey-designs-1558691 (1).jpg" class="card-img-top dim-img-card" alt="...">
                <button type="button" class="btn btn-outline-primary border-button py-4">
                    <p class="card-text">Appuntamenti</p>
                </button>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card h-100 border-card">
                <img src="images/relazione-medico-paziente-1024x683.jpg" class="card-img-top dim-img-card" alt="...">
                <button type="button" class="btn btn-outline-primary border-button py-4">
                    <p class="card-text">I tuoi pazienti</p>
                </button>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card h-100 border-card">
                <img src="images/farmaci-senza-ricetta1.jpg" class="card-img-top dim-img-card" alt="...">
                <button type="button" class="btn btn-outline-primary border-button py-4">
                    <p class="card-text">Ricette Farmaci</p>
                </button>
            </div>
        </div>
        <div class="col-md-3 my-3">
            <div class="card h-100 border-card">
                <img src="images/prescrizione-ricetta.jpg" class="card-img-top dim-img-card" alt="...">
                <button type="button" class="btn btn-outline-primary border-button py-4">
                    <p class="card-text">Ricetta Visita Specialistica</p>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection