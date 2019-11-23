@extends('layouts.mst')
@section('title', 'Vision and Mission | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Vision & Mission</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Vision & Mission</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Vision <strong class="strong-color">& Mission</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>VISION</h2>
                        <p align="justify">Menjadi Perusahaan General Contractor terkemuka, yang menghasilkan produk
                            konstruksi berkualitas, dan didukung oleh manajemen profesional, serta kemitraan strategis
                            guna meningkatkan kualitas hidup masyarakat.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>MISSION</h2>
                        <p align="justify">Menyediakan jasa konstruksi, property dan real estate, dengan prinsip-prinsip
                            usaha yang profesional dan keuangan yang sehat.</p>
                        <p align="justify">Menjadi perusahaan yang mempunyai tanggung jawab sosial dan ramah
                            lingkungan.</p>
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
