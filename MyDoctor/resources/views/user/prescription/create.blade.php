@extends('layouts.app')

@section('content')

<script type="application/javascript">
  function ShowFarmaco() {
    $("#contentFarmaco").toggle("slow", function() {
      // Animation complete.
    });
    document.getElementById('contentVisita').style.display = 'none';
    document.getElementById('descriptionFarmaco').name = 'description';
    document.getElementById('descriptionVisita').name = '';

  }

  function ShowVisita() {
    $("#contentVisita").toggle("slow", function() {
      // Animation complete.
    });
    document.getElementById('contentFarmaco').style.display = 'none';
    document.getElementById('descriptionVisita').name = 'description';
    document.getElementById('descriptionFarmaco').name = '';

  }
</script>

<div class="container my-5">
  <div class="row mt-5 py-5" align="center">
    <h1>
      <p color="#000" class="font-weight-bold">Richiedi la tua ricetta</p>
    </h1>
    <h4>
      <p color="#000" class="mt-2">Richiedi la tua ricetta quando ti è più comodo, potrà essere convalidata o respinta successivamente.</p>
    </h4>
    <form action="{{ URL::action('PrescriptionController@store') }}" method="POST">
      {{ csrf_field() }}
      <div class="form-group my-3">
        <h5>
          <p color="#000" align="center">Seleziona il tipo e scrivi il farmaco o visita specialistica e richiedi la ricetta al tuo medico.
            <button type="submit" name="submit" class="btn btn-outline-success btn-prenota font-weight-bold">+</button>
          </p>
        </h5>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p align="center" class="alert alert-danger" style="width: 300px; height:auto; padding:0%; margin:5px;">{{ '*' . $error  }}</p>
        @endforeach
        @endif
      </div>
      <div class="container my-5 " align="center">
        <div class="row">
          <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons">
            <label class="btn btn-outline-primary col-md-2 quadrato-ricetta mx-4 mb-2 w-100 h-100">
              <input type="radio" name="type" id="type1" value="farmaco" onclick="ShowFarmaco()">
              <h4 class="font-weight-bold" style="margin-top: 25px; margin-bottom: 25px;">Farmaco</h4>
            </label>
            <label class="btn btn-outline-primary col-md-2 quadrato-ricetta mx-4 mb-2 w-100 h-100">
              <input type="radio" name="type" id="type2" value="visita" onclick="ShowVisita()">
              <h4 class="font-weight-bold" style="margin-top: 25px; margin-bottom: 25px;">Visita</h4>
            </label>
          </div>
        </div>
      </div>

      <div class="container my-5 py-5" align="center" id="contentFarmaco" style="display:none">
        <div class="row mt-5">
          <div>
            <label class="label-ricetta">
              <input type="" class="label-ricetta text-uppercase" placeholder="Inserisci farmaco" class="form-control" id="descriptionFarmaco">
            </label>
          </div>
        </div>
      </div>


      <div class="container my-5 py-5" align="center" id="contentVisita" style="display:none">
        <div class="row mt-5">
          <div>
            <label class="label-ricetta">
              <input type="" class="label-ricetta text-uppercase" placeholder="Inserisci visita" class="form-control" id="descriptionVisita">
            </label>
          </div>
        </div>
      </div>

      <input id="id_user" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
      <input id="id_doctor" name="id_doctor" type="hidden" value="{{ Auth::user()->id_doctor }}">
      <input id="status" name="status" type="hidden" value="da confermare">
      <input id="date" name="date" type="hidden" value="{{ date('Y-m-d') }}">
    </form>
  </div>

  @endsection