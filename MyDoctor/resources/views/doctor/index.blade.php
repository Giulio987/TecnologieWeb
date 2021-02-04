@extends('layouts.app')

@section('content')
<div class="container">
    <!--<div class="row justify-content-center">-->
    <div class="row">
        <div class="col-12 col-lg-6">
            <!--start card-->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card mb-3 rounded" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="d-block w-100" src="images/relazione-medico-paziente-1024x683.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title">I tuoi pazienti</h4>
                                <p>Copy paste the HTML and CSS.</p>
                                <a href="#" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <div class="col-12 col-lg-6">
            <!--start card-->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card mb-3 rounded" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="d-block w-100" src="images/farmaci-senza-ricetta1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title">Ricette Farmaci</h4>
                                <p>Copy paste the HTML and CSS.</p>
                                <a href="{{ URL::action('Prescription_MedicineController@index') }}" class="btn btn-secondary">Indietro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6">
            <!--start card-->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card mb-3 rounded" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="d-block w-100" src="images/pexels-jess-bailey-designs-1558691 (1).jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title">Appuntamenti</h4>
                                <p>Copy paste the HTML and CSS.</p>
                                <a href="#" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <div class="col-12 col-lg-6">
            <!--start card-->
            <div class="shadow p-3 mb-5 bg-white rounded">
                <div class="card mb-3 rounded" style="max-width: 540px;">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="d-block w-100" src="images/prescrizione-ricetta.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h4 class="card-title">Ricette Visite Specialistiche</h4>
                                <p>Copy paste the HTML and CSS.</p>
                                <a href="#" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div>

    <!--form-->
    <div class="row">
        <form action="" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" name="data">
                <small class="form-text text-muted">Inserisci la data</small>
            </div>

            <div>
                <label for="aic">AIC</label>
                <input type="text" class="form-control" name="aic">
                <small class="form-text text-muted">Inserisci AIC farmaco</small>
            </div>

            <div class="form-group">
                <label for="fiscal_code_user">Codice Fiscale Paziente</label>
                <input type="text" class="form-control" name="description">
                <small class="form-text text-muted">Inserisci Codice Fiscale paziente</small>
            </div>

            <div class="form-group">
                <label for="amount">Cifra</label>
                <input type="number" class="form-control" name="amount">
                <small class="form-text text-muted">Inserisci la cifra spesa</small>
            </div>
        </form>
    </div>

</div>
@endsection