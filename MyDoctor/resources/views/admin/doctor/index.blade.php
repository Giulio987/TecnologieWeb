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
        <a href="{{ URL::action('AdminController@createDoctor') }}" class="btn btn-outline-primary mb-2">Aggiungi Nuovo Medico</a>
        </p>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">CF</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">email</th>
                <th scope="col">gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $d)
                    <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->fiscal_code }}</td>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->surname }}</td>
                    <td>{{ $d->email }}</td>
                    <td>{{ $d->gender }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection