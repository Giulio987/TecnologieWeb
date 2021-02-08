@extends('layouts.app')

@section('content')

<script type="text/javascript">
    $(window).on('load', function NoShow() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'none';
    });

    function Show1() {
        document.getElementById('content1').style.display = 'block';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'none';
    }

    function Show2() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'block';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'none';
    }

    function Show3() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'block';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'none';
    }

    function Show4() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'block';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'none';
    }

    function Show5() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'block';
        document.getElementById('content6').style.display = 'none';
    }

    function Show6() {
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
        document.getElementById('content4').style.display = 'none';
        document.getElementById('content5').style.display = 'none';
        document.getElementById('content6').style.display = 'block';
    }
</script>


<?php

date_default_timezone_set('Europe/Rome');

$time = array('08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00');

function giornoData($d, $m, $a)
{
    $gShort = array('Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato');
    $ts = mktime(0, 0, 0, $m, $d, $a);
    $gd = getdate($ts);
    return $gShort[$gd['wday']];
};
?>

<div class="container my-5">
    <div class="row mt-5 py-5" align="center">
        <h1>
            <p color="#000" class="font-weight-bold">Prenota una visita</p>
        </h1>
        <h4>
            <p color="#000" class="mt-2">Fissa un appuntamento per farti ricevere dal medico quando ti è più comodo.</p>
        </h4>
        <form action="{{ URL::action('VisitController@store') }}" method="POST" name="modulo">
            {{ csrf_field() }}
            <div class="form-group my-3">
                <h5>
                    <p color="#000" align="center">Seleziona data e ora e prenota la visita dal tuo medico.
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
                        <?php
                        $d = date("d");
                        $m = date("m");
                        $y = date("y");
                        $date1 = date('Y/m/d');
                        $gContent1 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary active col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date1" value="{{ $date1 }}" onclick="Show1()">
                            <h5 class="my-3">{{ $gContent1 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                        <?php
                        $date = date('Y/m/d');
                        $CalculateDate = strtotime('+1 day', strtotime($date));
                        $date2 = date("Y/m/d", $CalculateDate);
                        $d = date("d", $CalculateDate);
                        $m = date("m", $CalculateDate);
                        $y = date("y", $CalculateDate);
                        $gContent2 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date2" value="{{ $date2 }}" onclick="Show2()">
                            <h5 class="my-3">{{ $gContent2 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                        <?php
                        $date = date('Y/m/d');
                        $CalculateDate = strtotime('+2 day', strtotime($date));
                        $date3 = date("Y/m/d", $CalculateDate);
                        $d = date("d", $CalculateDate);
                        $m = date("m", $CalculateDate);
                        $y = date("y", $CalculateDate);
                        $gContent3 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date3" value="{{ $date3 }}" onclick="Show3()">
                            <h5 class="my-3">{{ $gContent3 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                        <?php
                        $date = date('Y/m/d');
                        $CalculateDate = strtotime('+3 day', strtotime($date));
                        $date4 = date("Y/m/d", $CalculateDate);
                        $d = date("d", $CalculateDate);
                        $m = date("m", $CalculateDate);
                        $y = date("y", $CalculateDate);
                        $gContent4 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date4" value="{{ $date4 }}" onclick="Show4()">
                            <h5 class="my-3">{{ $gContent4 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                        <?php
                        $date = date('Y/m/d');
                        $CalculateDate = strtotime('+4 day', strtotime($date));
                        $date5 = date("Y/m/d", $CalculateDate);
                        $d = date("d", $CalculateDate);
                        $m = date("m", $CalculateDate);
                        $y = date("y", $CalculateDate);
                        $gContent5 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date5" value="{{ $date5 }}" onclick="Show5()">
                            <h5 class="my-3">{{ $gContent5 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                        <?php
                        $date = date('Y/m/d');
                        $CalculateDate = strtotime('+5 day', strtotime($date));
                        $date6 = date("Y/m/d", $CalculateDate);
                        $d = date("d", $CalculateDate);
                        $m = date("m", $CalculateDate);
                        $y = date("y", $CalculateDate);
                        $gContent6 = giornoData($d, $m, $y);
                        ?>
                        <label class="btn btn-outline-primary col-md-2 quadrato mx-4 mb-2">
                            <input type="radio" name="date" id="date6" value="{{ $date6 }}" onclick="Show6()">
                            <h5 class="my-3">{{ $gContent6 }}</h5>
                            <h3 class="font-weight-bold my-3">{{ $d }}</h3>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row my-5" id="content1">
                @if($gContent1 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons">
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[0])->doesntExist())
                    @if (strtotime($time[0]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[1])->doesntExist())
                    @if (strtotime($time[1]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[2])->doesntExist())
                    @if (strtotime($time[2]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[3])->doesntExist())
                    @if (strtotime($time[3]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[4])->doesntExist())
                    @if (strtotime($time[4]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[5])->doesntExist())
                    @if (strtotime($time[5]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[6])->doesntExist())
                    @if (strtotime($time[6]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[7])->doesntExist())
                    @if (strtotime($time[7]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[8])->doesntExist())
                    @if (strtotime($time[8]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[9])->doesntExist())
                    @if (strtotime($time[9]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[10])->doesntExist())
                    @if (strtotime($time[10]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[11])->doesntExist())
                    @if (strtotime($time[11]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[12])->doesntExist())
                    @if (strtotime($time[12]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[13])->doesntExist())
                    @if (strtotime($time[13]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[14])->doesntExist())
                    @if (strtotime($time[14]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[15])->doesntExist())
                    @if (strtotime($time[15]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[16])->doesntExist())
                    @if (strtotime($time[16]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @endif
                    @if (DB::table('visits')->where('date', $date1)->where('time',$time[17])->doesntExist())
                    @if (strtotime($time[17]) > strtotime(date('H:i')))
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>
            <div class="row my-5" id="content2">
                @if($gContent2 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons" style="text-align: center;">
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[0])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[1])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[2])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[3])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[4])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[5])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[6])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[7])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[8])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[9])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[10])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[11])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[12])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[13])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[14])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[15])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[16])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date2)->where('time',$time[17])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>

            <div class="row my-5" id="content3">
                @if($gContent3 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons" style="text-align: center;">
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[0])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[1])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[2])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[3])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[4])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[5])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[6])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[7])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[8])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[9])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[10])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[11])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[12])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[13])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[14])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[15])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[16])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date3)->where('time',$time[17])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>
            <div class="row my-5" id="content4">
                @if($gContent4 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons" style="text-align: center;">
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[0])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[1])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[2])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[3])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[4])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[5])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[6])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[7])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[8])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[9])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[10])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[11])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[12])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[13])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[14])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[15])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[16])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date4)->where('time',$time[17])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>
            <div class="row my-5" id="content5">
                @if($gContent5 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons" style="text-align: center;">
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[0])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[1])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[2])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[3])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[4])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[5])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[6])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[7])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[8])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[9])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[10])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[11])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[12])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[13])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[14])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[15])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[16])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date5)->where('time',$time[17])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>
            <div class="row my-5" id="content6">
                @if($gContent6 != 'Domenica')
                <div class=" btn-group-toggle w-100 h-100" data-toggle="buttons" style="text-align: center;">
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[0])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[0] }}
                        <input type="radio" name="time" id="time0" value="{{ $time[0] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[1])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[1] }}
                        <input type="radio" name="time" id="time1" value="{{ $time[1] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[2])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[2] }}
                        <input type="radio" name="time" id="time2" value="{{ $time[2] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[3])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[3] }}
                        <input type="radio" name="time" id="time3" value="{{ $time[3] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[4])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[4] }}
                        <input type="radio" name="time" id="time4" value="{{ $time[4] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[5])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[5] }}
                        <input type="radio" name="time" id="time5" value="{{ $time[5] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[6])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[6] }}
                        <input type="radio" name="time" id="time6" value="{{ $time[6] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[7])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[7] }}
                        <input type="radio" name="time" id="time7" value="{{ $time[7] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[8])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[8] }}
                        <input type="radio" name="time" id="time8" value="{{ $time[8] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[9])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[9] }}
                        <input type="radio" name="time" id="time9" value="{{ $time[9] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[10])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[10] }}
                        <input type="radio" name="time" id="time10" value="{{ $time[10] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[11])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[11] }}
                        <input type="radio" name="time" id="time11" value="{{ $time[11] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[12])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[12] }}
                        <input type="radio" name="time" id="time12" value="{{ $time[12] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[13])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[13] }}
                        <input type="radio" name="time" id="time13" value="{{ $time[13] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[14])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[14] }}
                        <input type="radio" name="time" id="time14" value="{{ $time[14] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[15])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[15] }}
                        <input type="radio" name="time" id="time15" value="{{ $time[15] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[16])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[16] }}
                        <input type="radio" name="time" id="time16" value="{{ $time[16] }}">
                    </label>
                    @endif
                    @if (DB::table('visits')->where('date', $date6)->where('time',$time[17])->doesntExist())
                    <label class="btn btn-orario btn-outline-primary font-weight-bold col-md">{{ $time[17] }}
                        <input type="radio" name="time" id="time17" value="{{ $time[17] }}">
                    </label>
                    @endif
                </div>
                @else
                <div align="center">
                    <div class="alert alert-info" role="alert" style="width: 500px; height:auto;">
                        Non è possibile prenotare appuntamenti per Domenica.
                    </div>
                </div>
                @endif
            </div>
            <input id="id_user" name="id_user" type="hidden" value="{{ Auth::user()->id }}">
            <input id="id_doctor" name="id_doctor" type="hidden" value="{{ Auth::user()->id_doctor }}">
    </div>
    </form>
</div>
@endsection