@extends('layouts.mst')
@section('title', 'Organization Chart | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }

        #chart-container {
            height: 100%;
            padding: 5em;
            border: 2px dashed #aaa;
            border-radius: 5px;
            overflow: auto;
            text-align: center;
            background-image: linear-gradient(90deg, rgba(253, 199, 22, .5) 10%, rgba(0, 0, 0, 0) 10%), linear-gradient(rgba(253, 199, 22, .5) 10%, rgba(0, 0, 0, 0) 10%);
            background-size: 10px 10px;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Organization Chart</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Organization Chart</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Organization <strong class="strong-color">Chart</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="chart-container">
                        <img class="img-fluid" src="{{asset('images/organization-chart.png')}}" alt="Organization Chart">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".wrapper-choose").offset().top}, 500);
        }
    </script>
@endpush
