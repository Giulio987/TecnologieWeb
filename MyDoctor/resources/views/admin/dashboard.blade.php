@extends('layouts.layout_login')

@section('content')
    <div class="container mt-5">
        <div class="row card-check my-3">
          <div class="col-md-4 my-3">
            <div class="card h-100 border-card">
              <img src="images/relazione-medico-paziente-1024x683.jpg" class="card-img-top dim-img-card" alt="...">
              <a type="button" class="btn btn-outline-primary border-button py-4" href="{{ URL::action('AdminController@indexDoctor') }}" role="button">
                <p class="card-text font-weight-bold text-uppercase">Dottori</p>
              </a>
            </div>
          </div>
          <div class="col-md-4 my-3">
            <div class="card h-100 border-card">
              <img src="images/farmaci-senza-ricetta1.jpg" class="card-img-top dim-img-card" alt="...">
              <a type="button" class="btn btn-outline-primary border-button py-4" href="{{ URL::action('AdminController@indexUser') }}" role="button">
                <p class="card-text font-weight-bold text-uppercase">Pazienti</p>
              </a>
            </div>
          </div>
        </div>
        <div class="row card-check my-3">
          <div class="col-md-4 my-3">
            <div class="card h-100 border-card">
              <img src="images/prescrizione-ricetta.jpg" class="card-img-top dim-img-card" alt="...">
              <a type="button" class="btn btn-outline-primary border-button py-4" href="{{ URL::action('AdminController@indexPres') }}" role="button">
                <p class="card-text font-weight-bold text-uppercase">Visite</p>
              </a>
            </div>
          </div>
          <div class="col-md-4  my-3">
            <div class="card h-100 border-card">
              <img src="images/pexels-jess-bailey-designs-1558691.jpg" class="card-img-top dim-img-card" alt="...">
              <a type="button" class="btn btn-outline-primary border-button py-4" href="{{ URL::action('AdminController@indexVisit') }}" role="button">
                <p class="card-text font-weight-bold text-uppercase">Ricette</p>
              </a>
            </div>
          </div>
        </div>
      </div>
@endsection