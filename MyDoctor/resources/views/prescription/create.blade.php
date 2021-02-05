@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Prescivi una nuova Ricette per Farmaco</h1>

    <form action="{{ URL::action('PrescriptionController@store') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="id_user">ID Paziente</label>
          <input type="texy" class="form-control" name="id_user" >
          <small class="form-text text-muted">Inserisci paziente</small>
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <input type="text" class="form-control" name="description" >
            <small class="form-text text-muted">Inserisci una piccola descrizione</small>
        </div>

        <div class="form-group">
            <label for="status">Stato</label>
            <input type="text" class="form-control" name="status" value="Convalidata" disabled>
        </div>

        <fieldset class="form-group row">
            <legend class="col-form-label col-sm-2 float-sm-left pt-0">Tipologia Ricetta:</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="type" value="farmaco" checked>
                    <label class="form-check-label" for="type">
                        Farmaco
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="type" value="visita specialistica">
                    <label class="form-check-label" for="type">
                        Visita specialistica
                    </label>
                </div>
            </div>
        </fieldset>

        <input type="hidden" name="id_doctor" value="{{ Auth::guard('doctor')->user()->id }}" />

        <button type="submit" class="btn btn-primary">Salva</button>
        <button type="button" class="btn btn-secondary">Indietro</button>

    </form>
</div>
@endsection