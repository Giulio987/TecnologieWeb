@extends('layouts.app')

@section('content')

<?php
function giornoData($d, $m, $a)
{
    $gShort = array('Dom', 'Lun', 'Mart', 'Merc', 'Giov', 'Ven', 'Sab');
    $ts = mktime(0, 0, 0, $m, $d, $a);
    $gd = getdate($ts);
    echo $gShort[$gd['wday']];
};
?>


<div class="container my-5">
    <div class="row my-5 py-5">
        <h1>
            <p size="7" color="#000" class="font-weight-bold" style="text-align:center;">Prenota una visita</p>
        </h1>
        <h4>
            <p size="7" color="#000" style="text-align:center; margin-top:10px;">Fissa un appuntamento per farti ricevere dal medico quando ti è più comodo.</p>
        </h4>
    </div>
    <div class="container">
        <div class="row">

            <?php
            $d = date("d");
            $m = date("m");
            $y = date("y");
            ?>
            <div class="col-md " style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>


            <?php
            $date = date('Y/m/d');
            $calculatedate = strtotime('+1 day', strtotime($date));
            $newdate = date("Y/m/d", $calculatedate);
            $d = date("d", $calculatedate);
            $m = date("m", $calculatedate);
            $y = date("y", $calculatedate);
            ?>
            <div class="col-md " style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>

            <?php
            $date = date('Y/m/d');
            $calculatedate = strtotime('+2 day', strtotime($date));
            $newdate = date("Y,m,d", $calculatedate);
            $d = date("d", $calculatedate);
            $m = date("m", $calculatedate);
            $y = date("y", $calculatedate);
            ?>
            <div class="col-md" style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>

            <?php
            $date = date('Y/m/d');
            $calculatedate = strtotime('+3 day', strtotime($date));
            $newdate = date("Y,m,d", $calculatedate);
            $d = date("d", $calculatedate);
            $m = date("m", $calculatedate);
            $y = date("y", $calculatedate);
            ?>
            <div class="col-md" style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>

            <?php
            $date = date('Y/m/d');
            $calculatedate = strtotime('+4 day', strtotime($date));
            $newdate = date("Y,m,d", $calculatedate);
            $d = date("d", $calculatedate);
            $m = date("m", $calculatedate);
            $y = date("y", $calculatedate);
            ?>
            <div class="col-md" style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>

            <?php
            $date = date('Y/m/d');
            $calculatedate = strtotime('+5 day', strtotime($date));
            $newdate = date("Y,m,d", $calculatedate);
            $d = date("d", $calculatedate);
            $m = date("m", $calculatedate);
            $y = date("y", $calculatedate);
            ?>
            <div class="col-md" style="padding: 0px;"><button type="button" class="btn quadrato btn-outline-primary">
                    <h5>{{giornoData($d, $m, $y)}}</h5>
                    <h3 class="font-weight-bold">{{ $d }}</h3>
                </button></div>



        </div>
    </div>
   

    <div class="row my-5 py-5">

        <div class="row">
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">8:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">9:00</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">9:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">10:00</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">10:30</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">11:00</button>

            </div>

        </div>
        <div class="row mt-3">
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">11:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">12:00</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">12:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">15:00</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">15:30</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">16:00</button>

            </div>

        </div>
        <div class="row mt-3">
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">16:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">17:00</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">17:30</button>

            </div>

            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">18:00</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">18:30</button>

            </div>
            <div class="col-md">
                <button type="button" class="btn btn-orario btn-outline-primary font-weight-bold">19:00</button>

            </div>

        </div>

       

    </div>


</div>


@endsection