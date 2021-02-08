@extends('layouts.layout_login')

@section('content')
    <div class="container">
        <h1>
            <p size="7" color="#000" class="font-weight-bold" style="text-align:center;">Ricette Farmaci & Ricette Visite Specialistiche</p>
        </h1>
        <h4>
            <p size="7" color="#000" style="text-align:center; margin-top:10px;">Visualizza e Prescrivi le ricette che hai prescritto ai tuoi pazienti</p>
        </h4>
        <p class="text-center">
        <a href="{{ URL::action('PrescriptionController@create') }}" class="btn btn-outline-primary mb-2">Prescivi Nuova Ricetta</a>
        </p>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Data</th>
                <th scope="col">RFE</th>
                <th scope="col">Paziente</th>
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
                    <td>{{ $p->user->name }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection