@extends('layouts.layout_login')

@section('content')

    <div class="container">

        <h1>Modifica la Ricette</h1>

        <form action="" method="POST" class="needs-validation"
            novalidate>
            {{ csrf_field() }}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="status">Stato</label>
                    <input type="text" class="form-control" name="status" value="{{ $prescription->status }}" readonly />
                    <input type="hidden" name="status" value="Convalidata" />
                </div>

                <div class="form-group col-md-6">
                    <label for="date">Data della prescrizione</label>
                    <input type="date" class="form-control" name="date" value="{{ $prescription->date }}" readonly />
                    <small class="form-text text-muted">Data prima della modifica</small>
                </div>
            </div>
            <div class="form-group">
                <label for="">Seleziona un Paziente</label><br>
                <select id='selUser' name="id_user">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->surname }} - {{ $user->name }} -
                            {{ $user->fiscal_code }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Modifica Descrizione</label>
                <input type="text" class="form-control" name="description" value="{{ $prescription->description }}" required />
                <small class="form-text text-muted">Inserisci una nominativo farmaco o visita specialistica</small>
            </div>

            <div class="form-group col-md-6">
                <label for="type">Tipologia Ricetta</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Farmaco" name="type" class="custom-control-input" value="Farmaco" required />
                    <label class="custom-control-label" for="Farmaco">Farmaco</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="Visita-Specialistica" name="type" class="custom-control-input" value="Visita Specialistica" required />
                    <label class="custom-control-label" for="Visita-Specialistica">Visita Specialistica</label>
                </div>
                <small class="form-text text-muted">Selezione la tipologia di ricetta</small>
            </div>
quale chat??
            <p>Attenzione: il salvataggio della modificherà la data della prescrizione atomaticamente alla data odierna</p>
                            
            <input type="hidden" name="id_doctor" value="{{ Auth::guard('doctor')->user()->id }}" />
            <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>" />
            <!--
            <input type="hidden"name="date" value=<script language="Javascript">$(function () { $('.input-daterange').datepicker({ startDate : new Date(), todayHighlight : true }); });</script> />
            -->
            <button type="submit" class="btn btn-primary">Salva</button>
            <a href="{{ URL::action('PrescriptionController@indexDoctor') }}" class="btn btn-secondary">Indietro</a>

        </form>
    </div>
    <script type="application/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        $(document).ready(function() {
            $("#selUser").select2();
        });

    </script>
@endsection
