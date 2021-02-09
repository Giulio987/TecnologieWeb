@extends('layouts.layout_login')

@section('content')
    <div class="container">

        <h1>Prescivi una nuova Ricette per Farmaco</h1>

        <form action="{{ URL::action('AdminController@storeDoctor') }}" method="POST" class="needs-validation"
            novalidate>
            {{ csrf_field() }}

			<div class="form-group">
                <label for="fiscal_code">Codice Fiscale</label>
                <input type="text" class="form-control" name="fiscal_code" required />
                <small class="form-text text-muted">Inserisci surname</small>
			</div>
			
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" required />
                <small class="form-text text-muted">Inserisci surname</small>
            </div>

            <div class="form-group">
                <label for="surname">surname</label>
                <input type="text" class="form-control" name="surname" required />
                <small class="form-text text-muted">Inserisci surname</small>
            </div>
            
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control" name="email" required />
                <small class="form-text text-muted">Inserisci una email</small>
            </div>

            <div class="form-group">
                <label for="gender">gender</label>
                <input type="text" class="form-control" name="gender" required />
                <small class="form-text text-muted">Inserisci gender</small>
            </div>

            <div class="form-group">
                <label for="dob">dob</label>
                <input type="date" class="form-control" name="dob" required />
                <small class="form-text text-muted">Inserisci dob</small>
            </div>

            <div class="form-group">
                <label for="phone_number">phone_number</label>
                <input type="text" class="form-control" name="phone_number" required />
                <small class="form-text text-muted">Inserisci phone_number</small>
            </div>

            <div class="form-group">
                <label for="id_building">id_building</label>
                <input type="text" class="form-control" name="id_building" required />
                <small class="form-text text-muted">Inserisci id_building</small>
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="text" class="form-control" name="password" required />
                <small class="form-text text-muted">Inserisci password</small>
            </div>
            
            <button type="submit" class="btn btn-primary">Salva</button>
            <a href="{{ URL::action('AdminController@indexDoctor') }}" class="btn btn-secondary">Indietro</a>

        </form>
    </div>
@endsection