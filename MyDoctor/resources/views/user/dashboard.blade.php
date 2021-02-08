@extends('layouts.app')

@section('content')

<div class="container mt-5">
  <div class="row card-check my-3">
    <div class="col-md-4 my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">richiedi una visita dal tuo medico</p>
        </button>
      </div>
    </div>
    <div class="col-md-4 my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">richiedi una ricetta per il tuo farmaco</p>
        </button>
      </div>
    </div>
    <div class="col-md-4 my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">richiedi una ricetta per la tua visita specialistica</p>
        </button>
      </div>
    </div>
  </div>
  <div class="row card-check my-3">
    <div class="col-md-4 my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">visualizza le tue visite dal medico</p>
        </button>
      </div>
    </div>
    <div class="col-md-4  my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">visualizza le tue ricette per i farmaci</p>
        </button>
      </div>
    </div>
    <div class="col-md-4 my-3">
      <div class="card h-100 border-card">
        <img src="images/users/medici.jpg" class="card-img-top dim-img-card" alt="...">
        <button type="button" class="btn btn-outline-primary border-button py-4">
          <p class="card-text font-weight-bold text-uppercase">visualizza le tue ricette per le visite specialistiche</p>
        </button>
      </div>
    </div>
  </div>
</div>

@endsection