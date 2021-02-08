@extends('layouts.layout_login')

@section('content')

<div class="container">
    <h1>Prescivi una nuova Ricette per Farmaco</h1>

    <form action="{{ URL::action('DoctorController@storeAdmin') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="id_user">ID Dottore</label>
          <input type="texy" class="form-control" name="id_doctor" >
          <small class="form-text text-muted">Nome Dottore</small>
        </div>

    </form>
</div>
@endsection