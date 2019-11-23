@extends('layouts.mst')
@section('title', 'QHSE Commitment | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }

        .wrapReady {
            float: left;
            padding: 1rem;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>QHSE Commitment</h2>
            <p>We're committed to achieve the excellence of Quality, Health, Safety, and Environment.</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> QHSE Commitment</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">QHSE <strong class="strong-color">COMMITMENT</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper-txtInfo">
                        <img src="{{asset('images/hse-50.png')}}" alt="HSE" class="wrapReady">
                        <p align="justify">Selaras dengan visi, misi, dan nilai-nilai kami, kami berkomitmen untuk
                            mencapai keunggulan Kualitas, Kesehatan, Keselamatan, dan Lingkungan (QHSE). Untuk mematuhi
                            komitmen itu, kami mengharuskan semua karyawan, subkontraktor, dan pemangku kepentingan
                            lainnya untuk selalu bekerja dengan kualitas tinggi, kesehatan, keselamatan, dan lingkungan
                            dengan memastikan bahwa persyaratan QHSE dibuat sebagai bagian integral dalam kegiatan
                            rutin dan non-rutin harian mereka.</p>
                        <p align="justify">Keselamatan akan selalu diutamakan daripada lebih banyak kemanfaatan - karena
                            kebijakan keselamatan kita dan komitmen ini adalah pusat dari semua yang kita lakukan.
                            Pendekatan proaktif kami menciptakan nilai bagi klien kami dan melindungi aset kami yang
                            paling penting - karyawan kami. Seluruh tim kami berdedikasi untuk mempertahankan bisnis
                            yang berfokus pada keselamatan dan ramah lingkungan. Budaya keselamatan kami dipromosikan
                            oleh setiap anggota tim kami melalui perencanaan, penerapan, dan evaluasi praktik
                            keselamatan setiap hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{asset('vendor/jquery.slickwrap.js')}}"></script>
    <script>
        $(function () {
            $('.wrapReady').slickWrap({
                cutoff: 10,
                resolution: 15,
                bloomPadding: true
            });
        });

        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".wrapper-choose").offset().top}, 500);
        }
    </script>
@endpush
