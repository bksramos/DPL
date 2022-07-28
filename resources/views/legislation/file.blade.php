@extends('layouts.master')

@section('content')
<head>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
</head>


<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                 <embed src="{{URL::to('/legislations/'.$legislation->file)}}" width="100%" height="800" ></embed>
                </section>
            </div>
        </div>
      
    </section>
@endsection
