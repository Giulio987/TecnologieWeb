@extends('layouts.layout_login')

@section('content')
    <div class="container">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>

        <h1>
            <p size="7" color="#000" class="font-weight-bold" style="text-align:center;">Ricette Farmaci & Ricette Visite Specialistiche</p>
        </h1>
        <h4>
            <p size="7" color="#000" style="text-align:center; margin-top:10px;">Visualizza e Prescrivi le ricette che hai prescritto ai tuoi pazienti</p>
        </h4>
        <p class="text-center">
        <a href="{{ URL::action('PrescriptionController@createPrescription') }}" class="btn btn-outline-primary mb-2">Prescivi Nuova Ricetta</a>
        </p>

        <h2>Filtro Tabella</h2>
        <p>Ricerca qualsiasi tipo di dato per filtrare la tabella in base alla tue esigenze:</p> 
        <input id="myInput" type="text" placeholder="Ricerca..">
        <br><br>

        <table class="table table-striped">
            <thead>
                <tr class="table-info">
                <th scope="col">Data</th>
                <th scope="col">RFE</th>
                <th scope="col">Codice Fiscale</th>
                <th scope="col">Cognome</th>
                <th scope="col">Nome</th>
                <th scope="col">Sesso</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prescriptions as $p)
                    <tr>
                    <th scope="row">{{ date('d/m/Y', strtotime($p->date)) }}</th>
                    <td>{{ $p->rfe }}</td>
                    <td>{{ $p->user->fiscal_code }}</td>
                    <td>{{ $p->user->surname }}</td>
                    <td>{{ $p->user->name }}</td>
                    <td>{{ $p->user->gender }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection